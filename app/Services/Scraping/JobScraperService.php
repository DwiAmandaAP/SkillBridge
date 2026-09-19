<?php

namespace App\Services\Scraping;

use App\Models\JobPosting;
use App\Services\Classification\JobRoleClassifier;
use App\Services\Location\LocationNormalizer;
use Illuminate\Support\Facades\Log;

class JobScraperService
{
    protected JobRelevanceFilter $relevanceFilter;
    protected LocationNormalizer $locationNormalizer;
    protected JobRoleClassifier $roleClassifier;

    public function __construct(protected JobSourceInterface $source)
    {
        $this->relevanceFilter = new JobRelevanceFilter();
        $this->locationNormalizer = new LocationNormalizer();
        $this->roleClassifier = new JobRoleClassifier();
    }

    public function scrapeAndStore(array $keywords): int
    {
        $saved = 0;

        foreach ($keywords as $keyword) {
            try {
                $rawJobs = $this->source->fetch($keyword);
            } catch (\Throwable $e) {
                Log::warning("Scraper gagal untuk keyword '{$keyword}': ".$e->getMessage());
                continue;
            }

            $filteredJobs = $this->relevanceFilter->filterJobs($rawJobs);

            $excluded = count($rawJobs) - count($filteredJobs);
            if ($excluded > 0) {
                Log::info("Keyword '{$keyword}': {$excluded} job dibuang karena tidak relevan (dari ".count($rawJobs).' total)');
            }

            foreach ($filteredJobs as $job) {
                if (empty($job['source_url'])) {
                    continue;
                }

                $region = $this->locationNormalizer->normalize($job['location'] ?? null);
                $roleCategory = $this->roleClassifier->classify($job['title'] ?? '');

                $posting = JobPosting::firstOrCreate(
                    ['source_url' => $job['source_url']],
                    [
                        'source' => $job['source'] ?? 'unknown',
                        'title' => $job['title'] ?? '-',
                        'company' => $job['company'] ?? null,
                        'location' => $job['location'] ?? null,
                        'region' => $region,
                        'role_category' => $roleCategory,
                        'description' => $job['description'] ?? null,
                        'posted_at' => $job['posted_at'] ?? null,
                        'search_keyword' => $keyword,
                        'status' => 'pending',
                        'scraped_at' => now(),
                    ]
                );

                if ($posting->wasRecentlyCreated) {
                    $saved++;
                }
            }
        }

        return $saved;
    }
}