<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillContent;
use Illuminate\Database\Seeder;

class SkillContentSeeder extends Seeder
{
    public function run(): void
    {
        $sql = Skill::where('code', 'sql')->first();
        SkillContent::create([
            'skill_id' => $sql->id,
            'objective' => 'Mampu menulis query SQL untuk kebutuhan analisis data.',
            'why' => 'SQL adalah skill dasar yang dibutuhkan hampir semua career di bidang data.',
            'after_text' => 'Kamu bisa melakukan query, join, dan agregasi data secara mandiri.',
            'tasks' => ['Pelajari SELECT & WHERE', 'Pelajari JOIN', 'Latihan agregasi data'],
            'mini_project' => 'Buat query laporan penjualan bulanan dari database sample.',
            'duration_days' => 10,
        ]);

        $etl = Skill::where('code', 'etl')->first();
        SkillContent::create([
            'skill_id' => $etl->id,
            'objective' => 'Memahami alur Extract-Transform-Load dan membangun pipeline sederhana.',
            'why' => 'Skill inti untuk role Data Engineer.',
            'after_text' => 'Kamu bisa membangun pipeline data end-to-end.',
            'tasks' => ['Pelajari konsep ETL', 'Implementasi extract dari sumber data', 'Implementasi load ke database'],
            'mini_project' => 'Bangun pipeline ETL dari file CSV ke PostgreSQL.',
            'duration_days' => 13,
        ]);
    }
}
