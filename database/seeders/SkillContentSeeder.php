<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\SkillContent;

class SkillContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            [
                'code' => 'sql',
                'objective' => 'Menguasai query data dari dasar sampai gabungan tabel yang kompleks.',
                'why' => 'SQL adalah bahasa universal untuk mengambil dan mengolah data di hampir semua peran data.',
                'after_text' => 'Kamu bisa menulis query untuk mengambil, menyaring, dan menggabungkan data dari beberapa tabel.',
                'tasks' => [
                    'Latihan SELECT, WHERE, dan JOIN',
                    'Buat 3 query analisis dari dataset publik',
                    'Pelajari window function dasar',
                ],
                'mini_project' => 'Analisis dataset penjualan publik dan tulis 5 insight menggunakan SQL.',
                'duration_days' => 10,
            ],
            [
                'code' => 'python',
                'objective' => 'Menguasai Python untuk pengolahan data (pandas, numpy).',
                'why' => 'Python jadi tulang punggung otomasi dan analisis data di hampir semua peran teknis.',
                'after_text' => 'Kamu bisa membersihkan dan menganalisis dataset menggunakan pandas.',
                'tasks' => [
                    'Pelajari struktur data dasar Python',
                    'Latihan manipulasi data dengan pandas',
                    'Buat script pembersihan data sederhana',
                ],
                'mini_project' => 'Bersihkan dan analisis satu dataset mentah dari Kaggle.',
                'duration_days' => 14,
            ],
            [
                'code' => 'excel',
                'objective' => 'Menguasai fungsi Excel untuk pengolahan dan ringkasan data.',
                'why' => 'Excel masih jadi alat cepat untuk analisis data skala kecil-menengah di banyak perusahaan.',
                'after_text' => 'Kamu bisa membuat pivot table dan ringkasan data secara mandiri.',
                'tasks' => [
                    'Latihan pivot table',
                    'Pelajari VLOOKUP/XLOOKUP',
                    'Buat dashboard sederhana di Excel',
                ],
                'mini_project' => 'Buat laporan bulanan otomatis dengan pivot table dan chart.',
                'duration_days' => 7,
            ],
            [
                'code' => 'statistics',
                'objective' => 'Memahami konsep statistik dasar untuk pengambilan keputusan berbasis data.',
                'why' => 'Statistik adalah fondasi untuk menafsirkan data secara benar, bukan sekadar melihat angka.',
                'after_text' => 'Kamu bisa menjelaskan tren data menggunakan ukuran statistik dasar dan uji signifikansi sederhana.',
                'tasks' => [
                    'Pelajari mean, median, distribusi',
                    'Pelajari korelasi vs kausalitas',
                    'Latihan uji hipotesis sederhana',
                ],
                'mini_project' => 'Analisis korelasi antar variabel pada satu dataset dan tulis kesimpulannya.',
                'duration_days' => 10,
            ],
            [
                'code' => 'powerbi',
                'objective' => 'Membuat dashboard interaktif dengan Power BI.',
                'why' => 'Kemampuan visualisasi data yang baik membuat insight lebih mudah dipahami stakeholder non-teknis.',
                'after_text' => 'Kamu bisa membangun dashboard interaktif lengkap dengan filter dan drill-down.',
                'tasks' => [
                    'Pelajari data modeling di Power BI',
                    'Buat visualisasi dasar',
                    'Tambahkan filter dan interaktivitas',
                ],
                'mini_project' => 'Buat dashboard penjualan interaktif dari dataset contoh.',
                'duration_days' => 9,
            ],
            [
                'code' => 'cloud',
                'objective' => 'Memahami layanan dasar cloud (compute, storage, networking).',
                'why' => 'Hampir seluruh infrastruktur modern berjalan di cloud, jadi ini fondasi wajib untuk peran teknis.',
                'after_text' => 'Kamu bisa men-deploy aplikasi atau pipeline data sederhana di cloud.',
                'tasks' => [
                    'Pelajari konsep compute & storage cloud',
                    'Setup akun free-tier dan coba layanan dasar',
                    'Deploy satu aplikasi sederhana',
                ],
                'mini_project' => 'Deploy aplikasi atau pipeline kecil ke layanan cloud gratis.',
                'duration_days' => 12,
            ],
            [
                'code' => 'docker',
                'objective' => 'Memahami containerization dan cara menjalankan aplikasi dengan Docker.',
                'why' => 'Docker memudahkan aplikasi berjalan konsisten di berbagai environment.',
                'after_text' => 'Kamu bisa mem-package aplikasi ke dalam container dan menjalankannya.',
                'tasks' => [
                    'Pelajari konsep image & container',
                    'Buat Dockerfile sederhana',
                    'Jalankan aplikasi di dalam container',
                ],
                'mini_project' => 'Container-kan satu aplikasi kecil yang sudah kamu buat.',
                'duration_days' => 8,
            ],
            [
                'code' => 'datapipeline',
                'objective' => 'Memahami proses ETL/ELT untuk memindahkan dan mengolah data.',
                'why' => 'Pipeline data yang rapi memastikan data yang dipakai tim lain akurat dan tepat waktu.',
                'after_text' => 'Kamu bisa membangun pipeline sederhana yang menarik, mentransformasi, dan menyimpan data.',
                'tasks' => [
                    'Pelajari konsep ETL vs ELT',
                    'Coba tool orchestration dasar (mis. Airflow)',
                    'Buat pipeline sederhana end-to-end',
                ],
                'mini_project' => 'Bangun pipeline yang menarik data dari API publik ke database.',
                'duration_days' => 14,
            ],
            [
                'code' => 'ml',
                'objective' => 'Memahami alur kerja machine learning dari data sampai model jadi.',
                'why' => 'Ini fondasi untuk membangun sistem yang bisa belajar dari data, bukan cuma diprogram manual.',
                'after_text' => 'Kamu bisa melatih dan mengevaluasi model machine learning sederhana.',
                'tasks' => [
                    'Pelajari supervised vs unsupervised learning',
                    'Latihan training model dengan scikit-learn',
                    'Pelajari evaluasi model (akurasi, precision/recall)',
                ],
                'mini_project' => 'Latih model klasifikasi sederhana dan jelaskan hasil evaluasinya.',
                'duration_days' => 16,
            ],
            [
                'code' => 'javascript',
                'objective' => 'Menguasai dasar hingga menengah JavaScript untuk pengembangan web.',
                'why' => 'JavaScript adalah bahasa inti untuk membangun aplikasi web modern.',
                'after_text' => 'Kamu bisa membangun interaktivitas web dan memahami konsep asynchronous.',
                'tasks' => [
                    'Pelajari DOM manipulation',
                    'Pelajari async/await & fetch',
                    'Bangun satu fitur interaktif kecil',
                ],
                'mini_project' => 'Bangun aplikasi to-do list dengan localStorage.',
                'duration_days' => 12,
            ],
            [
                'code' => 'react',
                'objective' => 'Membangun antarmuka dengan React berbasis komponen.',
                'why' => 'React banyak dipakai di industri untuk membangun aplikasi web berskala.',
                'after_text' => 'Kamu bisa membangun aplikasi multi-komponen dengan state management dasar.',
                'tasks' => [
                    'Pelajari komponen & props',
                    'Pelajari state & effect hook',
                    'Bangun satu halaman dengan beberapa komponen',
                ],
                'mini_project' => 'Bangun mini dashboard dengan React dari data dummy.',
                'duration_days' => 14,
            ],
            [
                'code' => 'uidesign',
                'objective' => 'Memahami prinsip dasar desain antarmuka yang mudah dipakai.',
                'why' => 'Desain yang baik membuat produk lebih mudah dipahami dan dipercaya pengguna.',
                'after_text' => 'Kamu bisa mendesain alur dan tampilan antarmuka yang konsisten.',
                'tasks' => [
                    'Pelajari hierarki visual & spacing',
                    'Pelajari komponen UI umum',
                    'Redesain satu layar aplikasi yang sudah ada',
                ],
                'mini_project' => 'Redesain satu alur aplikasi (mis. halaman login) dan jelaskan alasannya.',
                'duration_days' => 10,
            ],
            [
                'code' => 'figma',
                'objective' => 'Menguasai Figma untuk membuat wireframe dan prototype.',
                'why' => 'Figma adalah tool kolaborasi desain paling umum dipakai industri saat ini.',
                'after_text' => 'Kamu bisa membuat wireframe, desain visual, dan prototype interaktif.',
                'tasks' => [
                    'Pelajari frame, component, auto layout',
                    'Buat wireframe untuk satu alur',
                    'Buat prototype interaktif sederhana',
                ],
                'mini_project' => 'Buat prototype interaktif untuk satu fitur aplikasi.',
                'duration_days' => 9,
            ],
            [
                'code' => 'cybersecurity',
                'objective' => 'Memahami konsep dasar keamanan siber dan jenis ancaman umum.',
                'why' => 'Pemahaman dasar keamanan penting untuk melindungi sistem dan data organisasi.',
                'after_text' => 'Kamu bisa mengenali jenis ancaman umum dan praktik keamanan dasar.',
                'tasks' => [
                    'Pelajari jenis serangan umum (phishing, malware, dll)',
                    'Pelajari prinsip CIA triad',
                    'Latihan analisis log sederhana',
                ],
                'mini_project' => 'Buat laporan analisis satu skenario insiden keamanan sederhana.',
                'duration_days' => 12,
            ],
            [
                'code' => 'networking',
                'objective' => 'Memahami dasar jaringan komputer (TCP/IP, DNS, firewall).',
                'why' => 'Pemahaman jaringan adalah dasar untuk banyak peran infrastruktur dan keamanan.',
                'after_text' => 'Kamu bisa menjelaskan cara data berpindah di jaringan dan mengenali konfigurasi dasar.',
                'tasks' => [
                    'Pelajari model OSI/TCP-IP',
                    'Pelajari konsep DNS & routing dasar',
                    'Latihan konfigurasi jaringan sederhana',
                ],
                'mini_project' => 'Dokumentasikan topologi jaringan sederhana dan cara kerjanya.',
                'duration_days' => 10,
            ],
            [
                'code' => 'linux',
                'objective' => 'Menguasai perintah dasar Linux untuk operasional sistem.',
                'why' => 'Banyak server dan infrastruktur cloud berjalan di atas Linux.',
                'after_text' => 'Kamu bisa menavigasi, mengelola file, dan menjalankan proses dasar di Linux.',
                'tasks' => [
                    'Pelajari perintah dasar (cd, ls, grep, dll)',
                    'Pelajari manajemen permission & proses',
                    'Latihan scripting shell sederhana',
                ],
                'mini_project' => 'Buat shell script otomatisasi tugas sederhana.',
                'duration_days' => 8,
            ],
            [
                'code' => 'git',
                'objective' => 'Menguasai version control dengan Git dan alur kerja branching.',
                'why' => 'Git adalah standar industri untuk kolaborasi dan menjaga riwayat perubahan kode.',
                'after_text' => 'Kamu bisa bekerja dengan branch, merge, dan menyelesaikan konflik sederhana.',
                'tasks' => [
                    'Pelajari commit, branch, merge',
                    'Latihan menyelesaikan merge conflict',
                    'Praktik alur kerja pull request',
                ],
                'mini_project' => 'Kelola satu proyek kecil dengan alur branching yang rapi di GitHub.',
                'duration_days' => 6,
            ],
            [
                'code' => 'communication',
                'objective' => 'Melatih kemampuan menyampaikan ide secara jelas ke audiens teknis maupun non-teknis.',
                'why' => 'Skill teknis sebaik apa pun kurang berdampak tanpa kemampuan mengomunikasikannya.',
                'after_text' => 'Kamu bisa menyusun presentasi atau laporan yang mudah dipahami audiens yang berbeda.',
                'tasks' => [
                    'Latihan menulis ringkasan singkat dari analisis teknis',
                    'Latihan presentasi ke audiens non-teknis',
                    'Minta umpan balik dari teman/mentor',
                ],
                'mini_project' => 'Presentasikan satu hasil proyek ke audiens non-teknis dalam 5 menit.',
                'duration_days' => 7,
            ],
            [
                'code' => 'problemsolving',
                'objective' => 'Melatih pendekatan sistematis dalam memecahkan masalah.',
                'why' => 'Kemampuan ini menentukan seberapa efektif kamu menangani masalah baru yang belum pernah ditemui.',
                'after_text' => 'Kamu bisa memecah masalah kompleks menjadi langkah-langkah kecil yang bisa dieksekusi.',
                'tasks' => [
                    'Latihan studi kasus terstruktur',
                    'Pelajari kerangka root-cause analysis',
                    'Terapkan pada satu masalah nyata dari proyek kuliah',
                ],
                'mini_project' => 'Dokumentasikan satu proses pemecahan masalah nyata dari awal sampai solusi.',
                'duration_days' => 7,
            ],
            [
                'code' => 'projectmanagement',
                'objective' => 'Memahami dasar perencanaan dan eksekusi proyek.',
                'why' => 'Kemampuan ini penting untuk memastikan pekerjaan tim berjalan tepat waktu dan terarah.',
                'after_text' => 'Kamu bisa menyusun timeline, milestone, dan memantau progres proyek kecil.',
                'tasks' => [
                    'Pelajari metodologi Agile/Scrum dasar',
                    'Buat timeline & milestone untuk satu proyek',
                    'Latihan memantau progres dengan board sederhana',
                ],
                'mini_project' => 'Kelola satu proyek kelompok kuliah menggunakan board Kanban sederhana.',
                'duration_days' => 8,
            ],
        ];

        foreach ($contents as $c) {
            $skill = Skill::where('code', $c['code'])->first();
            if (!$skill) continue;
            SkillContent::updateOrCreate(
                ['skill_id' => $skill->id],
                [
                    'objective' => $c['objective'],
                    'why' => $c['why'],
                    'after_text' => $c['after_text'],
                    'tasks' => $c['tasks'],
                    'mini_project' => $c['mini_project'],
                    'duration_days' => $c['duration_days'],
                ]
            );
        }
    }
}
