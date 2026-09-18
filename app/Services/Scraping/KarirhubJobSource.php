<?php

namespace App\Services\Scraping;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class KarirhubJobSource implements JobSourceInterface
{
    protected string $endpoint = 'https://api.algolia.kemnaker.go.id/1/indexes/*/queries';

    protected string $algoliaApiKey = 'alps_6bdce80b58a0fa863d43f15cd5cbac204d6d76d227437d91';
    protected string $algoliaAppId = 'L3WWP72HSI';
    protected string $indexName = 'karirhub_industrial_vacancies';

    protected int $hitsPerPage = 50;
    protected int $maxPages = 10;
    protected int $delaySeconds = 1;
    protected int $lookbackDays = 30;

    public function fetch(string $keyword): array
    {
        $jobs = [];
        $cutoff = Carbon::now()->subDays($this->lookbackDays);

        for ($page = 0; $page < $this->maxPages; $page++) {
            $result = $this->requestPage($keyword, $page);

            if (! $result) {
                break;
            }

            $hits = $result['hits'] ?? [];

            if (empty($hits)) {
                break;
            }

            foreach ($hits as $hit) {
                $postedAt = isset($hit['published_at'])
                    ? Carbon::createFromTimestamp($hit['published_at'])
                    : null;

                if ($postedAt && $postedAt->lt($cutoff)) {
                    continue;
                }

                $jobs[] = $this->mapToJobPosting($hit, $postedAt);
            }

            $nbPages = $result['nbPages'] ?? 1;
            if ($page + 1 >= $nbPages) {
                break;
            }

            sleep($this->delaySeconds);
        }

        return $jobs;
    }

    protected function requestPage(string $keyword, int $page): ?array
    {
        $url = $this->endpoint.'?'.http_build_query([
            'x-algolia-agent' => 'SkillBridge-Capstone/1.0',
            'x-algolia-api-key' => $this->algoliaApiKey,
            'x-algolia-application-id' => $this->algoliaAppId,
        ]);

        try {
            $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                ])
                ->timeout(15)
                ->post($url, [
                    'requests' => [
                        [
                            'indexName' => $this->indexName,
                            'clickAnalytics' => false,
                            'enablePersonalization' => false,
                            'facetFilters' => [],
                            'hitsPerPage' => $this->hitsPerPage,
                            'optionalFilters' => [],
                            'page' => $page,
                            'query' => $keyword,
                            'userToken' => 'skillbridge-'.Str::uuid(),
                        ],
                    ],
                ]);

            if (! $response->successful()) {
                Log::warning("Karirhub gagal halaman {$page} untuk '{$keyword}': status ".$response->status());
                return null;
            }

            $json = $response->json();

            return $json['results'][0] ?? null;
        } catch (\Throwable $e) {
            Log::error("Karirhub request error halaman {$page} untuk '{$keyword}': ".$e->getMessage());
            return null;
        }
    }

    protected function mapToJobPosting(array $hit, ?Carbon $postedAt): array
    {
        $skillNames = collect($hit['skills'] ?? [])->implode(', ');

        $syntheticDescription = trim(
            ($hit['title'] ?? '').'. '
            .'Bidang: '.($hit['job_function_name'] ?? '-').'. '
            .'Industri: '.($hit['industry_name'] ?? '-').'. '
            .'Skill yang dibutuhkan: '.$skillNames.'.'
        );

        $sourceUrl = $hit['platform_link']
            ?? 'https://karirhub.kemnaker.go.id/lowongan-dalam-negeri/lowongan/'.($hit['job_id'] ?? $hit['id']);

        return [
            'source' => 'Karirhub Kemnaker',
            'source_url' => $sourceUrl,
            'title' => $hit['title'] ?? '-',
            'company' => $hit['company_name'] ?? null,
            'location' => $hit['city_name'] ?? null,
            'description' => $syntheticDescription,
            'posted_at' => $postedAt,
        ];
    }
}