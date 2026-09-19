<?php

namespace App\Services\Classification;

class JobRoleClassifier
{
    /**
     * Urutan penting: role lebih spesifik/gabungan diperiksa duluan,
     * supaya "Full Stack Developer" tidak salah kena "Frontend Developer"
     * hanya karena mengandung kata "Developer" juga, dst.
     */
    protected array $roleKeywords = [
        'Full Stack' => [
            'full stack', 'full-stack', 'fullstack',
        ],
        'Frontend' => [
            'frontend', 'front-end', 'front end', 'ui developer',
        ],
        'Backend' => [
            'backend', 'back-end', 'back end',
        ],
        'Mobile Development' => [
            'mobile developer', 'android developer', 'ios developer',
            'flutter developer', 'react native developer',
        ],
        'Data Engineering' => [
            'data engineer', 'data engineering', 'etl developer',
        ],
        'Data Analytics' => [
            'data analyst', 'data analytics', 'business intelligence',
        ],
        'Data Science / AI' => [
            'data scientist', 'machine learning', 'ai engineer',
            'artificial intelligence engineer', 'computer vision',
            'nlp engineer', 'natural language processing',
        ],
        'DevOps / Infrastructure' => [
            'devops', 'site reliability', 'sre', 'cloud engineer',
            'infrastructure engineer', 'platform engineer',
        ],
        'QA / Testing' => [
            'qa engineer', 'quality assurance', 'software tester',
            'test engineer', 'sdet',
        ],
        'Cyber Security' => [
            'cyber security', 'cybersecurity', 'security engineer',
            'penetration test', 'security analyst', 'soc analyst',
        ],
        'UI/UX Design' => [
            'ui/ux', 'ux designer', 'ui designer', 'product designer',
            'user experience', 'user interface designer',
        ],
        'IT Support' => [
            'it support', 'helpdesk', 'technical support', 'desktop support',
        ],
        'Network / System Admin' => [
            'network engineer', 'system administrator', 'sysadmin',
            'network administrator',
        ],
        'Project / Product Management' => [
            'project manager', 'product manager', 'scrum master',
            'technical program manager',
        ],
        // Fallback paling umum -- diperiksa paling akhir.
        'Software Engineering (General)' => [
            'software engineer', 'programmer', 'developer', 'software developer',
        ],
    ];

    /**
     * Klasifikasi title lowongan ke 1 role kanonik.
     * Return null kalau tidak ada keyword yang cocok sama sekali
     * (misal lowongan non-IT yang lolos filter relevansi karena alasan lain,
     * atau title terlalu ambigu).
     */
    public function classify(string $title): ?string
    {
        $normalized = strtolower($title);

        foreach ($this->roleKeywords as $role => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($normalized, $keyword)) {
                    return $role;
                }
            }
        }

        return null;
    }

    public function knownRoles(): array
    {
        return array_keys($this->roleKeywords);
    }
}