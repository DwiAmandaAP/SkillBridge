<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Models\Skill;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        // Sudah dicocokkan ke Career.php asli: relasi many-to-many ke Skill
        // lewat method skills() (bukan requiredSkills()), pivot table
        // 'career_skill' (singular — PENTING: migration project ini sempat
        // membuat tabel 'career_skills' plural, harus diperbaiki dulu di
        // migration sebelum seeder ini bisa jalan, lihat catatan di README).

        $career = Career::updateOrCreate(
            ['slug' => 'data-analyst'],
            [
            'slug' => 'data-analyst',
            'name' => 'Data Analyst',
            'category' => 'Data',
            'difficulty' => 'Beginner-friendly',
            'industry_demand' => 78,
            'job_sample_size' => 420,
            'remote_friendly' => true,
            'short_description' => 'Mengolah data mentah menjadi insight yang bisa dipakai untuk keputusan bisnis.',
            'description' => 'Data Analyst bertanggung jawab mengumpulkan, membersihkan, dan menganalisis data untuk menjawab pertanyaan bisnis, lalu mengomunikasikan temuannya lewat laporan dan dashboard.',
            'responsibilities' => [
                'Menyiapkan dan membersihkan dataset dari berbagai sumber',
                'Membuat dashboard dan laporan berkala',
                'Melakukan analisis statistik dasar untuk menjawab pertanyaan bisnis',
                'Berkomunikasi dengan tim non-teknis untuk menerjemahkan kebutuhan data',
            ],
            'tools' => [
                'SQL',
                'Excel',
                'Power BI',
                'Python',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'sql',
                    'level' => 90,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'excel',
                    'level' => 85,
                    'importance' => 'high',
                ],
                [
                    'code' => 'statistics',
                    'level' => 80,
                    'importance' => 'high',
                ],
                [
                    'code' => 'powerbi',
                    'level' => 75,
                    'importance' => 'high',
                ],
                [
                    'code' => 'python',
                    'level' => 65,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'communication',
                    'level' => 70,
                    'importance' => 'medium',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }

        $career = Career::updateOrCreate(
            ['slug' => 'data-engineer'],
            [
            'slug' => 'data-engineer',
            'name' => 'Data Engineer',
            'category' => 'Data',
            'difficulty' => 'Intermediate',
            'industry_demand' => 71,
            'job_sample_size' => 310,
            'remote_friendly' => true,
            'short_description' => 'Membangun dan menjaga infrastruktur serta pipeline data agar data siap dipakai tim lain.',
            'description' => 'Data Engineer merancang, membangun, dan memelihara sistem serta pipeline yang mengalirkan data dari berbagai sumber ke tempat yang bisa diakses tim analytics maupun product.',
            'responsibilities' => [
                'Membangun dan menjaga data pipeline (ETL/ELT)',
                'Mendesain skema database yang efisien',
                'Mengelola infrastruktur data di cloud',
                'Menjamin kualitas dan keandalan data',
            ],
            'tools' => [
                'SQL',
                'Python',
                'Airflow',
                'Docker',
                'Cloud (AWS/GCP)',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'sql',
                    'level' => 90,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'python',
                    'level' => 85,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'datapipeline',
                    'level' => 75,
                    'importance' => 'high',
                ],
                [
                    'code' => 'cloud',
                    'level' => 70,
                    'importance' => 'high',
                ],
                [
                    'code' => 'docker',
                    'level' => 65,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'statistics',
                    'level' => 45,
                    'importance' => 'low',
                ],
                [
                    'code' => 'communication',
                    'level' => 55,
                    'importance' => 'low',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }

        $career = Career::updateOrCreate(
            ['slug' => 'software-engineer'],
            [
            'slug' => 'software-engineer',
            'name' => 'Software Engineer',
            'category' => 'Engineering',
            'difficulty' => 'Intermediate',
            'industry_demand' => 85,
            'job_sample_size' => 560,
            'remote_friendly' => true,
            'short_description' => 'Merancang, membangun, dan menjaga aplikasi atau sistem perangkat lunak.',
            'description' => 'Software Engineer menulis, menguji, dan memelihara kode untuk membangun produk digital, bekerja sama dengan desainer dan product manager.',
            'responsibilities' => [
                'Mengembangkan fitur baru sesuai spesifikasi',
                'Menulis kode yang teruji dan mudah dirawat',
                'Melakukan code review bersama tim',
                'Men-debug dan memperbaiki masalah di produksi',
            ],
            'tools' => [
                'JavaScript',
                'Git',
                'React',
                'SQL',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'javascript',
                    'level' => 85,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'git',
                    'level' => 80,
                    'importance' => 'high',
                ],
                [
                    'code' => 'problemsolving',
                    'level' => 80,
                    'importance' => 'high',
                ],
                [
                    'code' => 'react',
                    'level' => 60,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'sql',
                    'level' => 60,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'python',
                    'level' => 55,
                    'importance' => 'low',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }

        $career = Career::updateOrCreate(
            ['slug' => 'ai-engineer'],
            [
            'slug' => 'ai-engineer',
            'name' => 'AI Engineer',
            'category' => 'Data',
            'difficulty' => 'Advanced',
            'industry_demand' => 66,
            'job_sample_size' => 190,
            'remote_friendly' => true,
            'short_description' => 'Membangun dan menerapkan model machine learning ke dalam produk nyata.',
            'description' => 'AI Engineer menggabungkan pemahaman machine learning dengan software engineering untuk melatih, menguji, dan men-deploy model ke dalam sistem produksi.',
            'responsibilities' => [
                'Melatih dan mengevaluasi model machine learning',
                'Menyiapkan data untuk kebutuhan training',
                'Men-deploy model ke lingkungan produksi',
                'Memantau performa model dari waktu ke waktu',
            ],
            'tools' => [
                'Python',
                'scikit-learn',
                'Cloud (AWS/GCP)',
                'Docker',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'python',
                    'level' => 90,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'ml',
                    'level' => 85,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'statistics',
                    'level' => 80,
                    'importance' => 'high',
                ],
                [
                    'code' => 'sql',
                    'level' => 65,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'cloud',
                    'level' => 60,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'docker',
                    'level' => 50,
                    'importance' => 'low',
                ],
                [
                    'code' => 'communication',
                    'level' => 55,
                    'importance' => 'low',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }

        $career = Career::updateOrCreate(
            ['slug' => 'cybersecurity-analyst'],
            [
            'slug' => 'cybersecurity-analyst',
            'name' => 'Cybersecurity Analyst',
            'category' => 'Security',
            'difficulty' => 'Intermediate',
            'industry_demand' => 69,
            'job_sample_size' => 240,
            'remote_friendly' => false,
            'short_description' => 'Melindungi sistem dan data organisasi dari ancaman keamanan siber.',
            'description' => 'Cybersecurity Analyst memantau, mendeteksi, dan merespons ancaman keamanan, serta membangun praktik keamanan yang lebih baik di organisasi.',
            'responsibilities' => [
                'Memantau sistem untuk aktivitas mencurigakan',
                'Melakukan audit dan penilaian kerentanan',
                'Merespons dan menganalisis insiden keamanan',
                'Menyusun rekomendasi kebijakan keamanan',
            ],
            'tools' => [
                'SIEM tools',
                'Linux',
                'Wireshark',
                'Cloud security',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'cybersecurity',
                    'level' => 90,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'networking',
                    'level' => 85,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'linux',
                    'level' => 75,
                    'importance' => 'high',
                ],
                [
                    'code' => 'cloud',
                    'level' => 55,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'problemsolving',
                    'level' => 70,
                    'importance' => 'medium',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }

        $career = Career::updateOrCreate(
            ['slug' => 'cloud-engineer'],
            [
            'slug' => 'cloud-engineer',
            'name' => 'Cloud Engineer',
            'category' => 'Engineering',
            'difficulty' => 'Intermediate',
            'industry_demand' => 64,
            'job_sample_size' => 260,
            'remote_friendly' => true,
            'short_description' => 'Mengelola infrastruktur cloud agar aplikasi berjalan andal dan efisien.',
            'description' => 'Cloud Engineer merancang dan mengelola infrastruktur di layanan cloud, termasuk deployment, scaling, dan keamanan sistem.',
            'responsibilities' => [
                'Mengonfigurasi dan mengelola layanan cloud',
                'Mengotomasi proses deployment',
                'Memantau performa dan biaya infrastruktur',
                'Menjaga keamanan konfigurasi cloud',
            ],
            'tools' => [
                'AWS/GCP/Azure',
                'Docker',
                'Linux',
                'Terraform',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'cloud',
                    'level' => 90,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'docker',
                    'level' => 80,
                    'importance' => 'high',
                ],
                [
                    'code' => 'linux',
                    'level' => 75,
                    'importance' => 'high',
                ],
                [
                    'code' => 'networking',
                    'level' => 65,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'git',
                    'level' => 60,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'python',
                    'level' => 55,
                    'importance' => 'low',
                ],
                [
                    'code' => 'communication',
                    'level' => 50,
                    'importance' => 'low',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }

        $career = Career::updateOrCreate(
            ['slug' => 'uiux-designer'],
            [
            'slug' => 'uiux-designer',
            'name' => 'UI/UX Designer',
            'category' => 'Design',
            'difficulty' => 'Beginner-friendly',
            'industry_demand' => 58,
            'job_sample_size' => 300,
            'remote_friendly' => true,
            'short_description' => 'Merancang pengalaman dan tampilan produk digital yang mudah dipakai.',
            'description' => 'UI/UX Designer meneliti kebutuhan pengguna dan menerjemahkannya menjadi alur serta tampilan antarmuka yang jelas dan enak dipakai.',
            'responsibilities' => [
                'Melakukan riset dan wawancara pengguna',
                'Membuat wireframe dan prototype',
                'Mendesain tampilan visual antarmuka',
                'Melakukan usability testing',
            ],
            'tools' => [
                'Figma',
                'Design system',
                'User research',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'uidesign',
                    'level' => 90,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'figma',
                    'level' => 85,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'communication',
                    'level' => 80,
                    'importance' => 'high',
                ],
                [
                    'code' => 'problemsolving',
                    'level' => 65,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'projectmanagement',
                    'level' => 50,
                    'importance' => 'low',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }

        $career = Career::updateOrCreate(
            ['slug' => 'product-manager'],
            [
            'slug' => 'product-manager',
            'name' => 'Product Manager',
            'category' => 'Product',
            'difficulty' => 'Advanced',
            'industry_demand' => 55,
            'job_sample_size' => 200,
            'remote_friendly' => false,
            'short_description' => 'Menentukan arah produk dan menjembatani kebutuhan user, bisnis, dan tim teknis.',
            'description' => 'Product Manager menyusun visi dan prioritas produk, lalu bekerja sama dengan desain, engineering, dan bisnis untuk mewujudkannya.',
            'responsibilities' => [
                'Menyusun roadmap dan prioritas produk',
                'Mengumpulkan dan menganalisis kebutuhan pengguna',
                'Menulis spesifikasi fitur',
                'Mengukur dampak fitur setelah rilis',
            ],
            'tools' => [
                'Analytics tools',
                'Roadmap tools',
                'SQL dasar',
            ],
        ]
        );

        $requiredSkills = [
                [
                    'code' => 'communication',
                    'level' => 90,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'projectmanagement',
                    'level' => 85,
                    'importance' => 'critical',
                ],
                [
                    'code' => 'problemsolving',
                    'level' => 80,
                    'importance' => 'high',
                ],
                [
                    'code' => 'statistics',
                    'level' => 55,
                    'importance' => 'medium',
                ],
                [
                    'code' => 'sql',
                    'level' => 50,
                    'importance' => 'low',
                ],
        ];
        foreach ($requiredSkills as $req) {
            $skill = Skill::where('code', $req['code'])->first();
            if (!$skill) continue;
            $career->skills()->syncWithoutDetaching([
                $skill->id => ['required_level' => $req['level'], 'importance' => $req['importance']],
            ]);
        }
    }
}
