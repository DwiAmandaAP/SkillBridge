<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    use ApiResponse;

    /**
     * GET Admin Careers
     *
     * Description: Menampilkan seluruh career untuk kebutuhan administrasi,
     * termasuk jumlah skill yang diwajibkan pada setiap career.
        *
        * @group Admin - Career Management
        * @authenticated
     */
    public function index()
    {
        $careers = Career::withCount('careerSkills as required_skills_count')->get();

        return $this->success($careers->map(fn ($c) => [
            'id' => $c->id,
            'name' => $c->name,
            'required_skills_count' => $c->required_skills_count,
        ]));
    }

    /**
     * POST Admin Career
     *
     * Description: Menambahkan career baru beserta daftar skill yang dibutuhkan.
     * Slug career dibuat otomatis dari nama career dan dibuat unik jika sudah digunakan.
     *
        * @group Admin - Career Management
        * @authenticated
     * @bodyParam name string required Nama career. Example: Backend Developer
     * @bodyParam category string Kategori career. Example: technology
     * @bodyParam difficulty string Tingkat kesulitan career. Example: intermediate
     * @bodyParam industry_demand integer Persentase demand antara 0 dan 100. Example: 80
     * @bodyParam job_sample_size integer Jumlah sampel lowongan. Example: 150
     * @bodyParam remote_friendly boolean Apakah career mendukung kerja remote. Example: true
     * @bodyParam short_description string Ringkasan singkat career. Example: Membangun layanan backend yang scalable.
     * @bodyParam description string Deskripsi lengkap career. Example: Backend developer merancang dan mengembangkan layanan server.
     * @bodyParam responsibilities array Daftar tanggung jawab career. Example: ["Membangun API"]
     * @bodyParam tools array Daftar tools yang umum digunakan. Example: ["Laravel", "PostgreSQL"]
     * @bodyParam required_skills object[] Daftar skill yang diwajibkan.
     * @bodyParam required_skills[].skill_id integer required ID skill. Example: 3
     * @bodyParam required_skills[].level integer required Level skill antara 0 dan 100. Example: 70
     * @bodyParam required_skills[].importance string required Tingkat kepentingan skill. Example: high
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'difficulty' => 'nullable|string',
            'industry_demand' => 'nullable|integer|min:0|max:100',
            'job_sample_size' => 'nullable|integer|min:0',
            'remote_friendly' => 'nullable|boolean',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'responsibilities' => 'nullable|array',
            'tools' => 'nullable|array',
            'required_skills' => 'nullable|array',
            'required_skills.*.skill_id' => 'required_with:required_skills|exists:skills,id',
            'required_skills.*.level' => 'required_with:required_skills|integer|min:0|max:100',
            'required_skills.*.importance' => 'required_with:required_skills|string',
        ]);

        $slug = Str::slug($validated['name']);
        $original = $slug;
        $i = 1;
        while (Career::where('slug', $slug)->exists()) {
            $slug = $original.'-'.$i++;
        }

        $career = Career::create([
            ...collect($validated)->except('required_skills')->toArray(),
            'slug' => $slug,
        ]);

        if (!empty($validated['required_skills'])) {
            $sync = [];
            foreach ($validated['required_skills'] as $rs) {
                $sync[$rs['skill_id']] = [
                    'required_level' => $rs['level'],
                    'importance' => $rs['importance'],
                ];
            }
            $career->skills()->sync($sync);
        }

        return $this->success([
            'id' => $career->id,
            'slug' => $career->slug,
        ], 'Career ditambahkan', 201);
    }

    /**
     * PATCH Admin Career
     *
     * Description: Memperbarui data career dan, jika dikirim, mengganti daftar skill yang dibutuhkan.
     * Semua field body bersifat opsional.
     *
        * @group Admin - Career Management
        * @authenticated
     * @urlParam career integer required ID career. Example: 1
     * @bodyParam name string Nama career. Example: Senior Backend Developer
     * @bodyParam category string Kategori career. Example: technology
     * @bodyParam difficulty string Tingkat kesulitan career. Example: advanced
     * @bodyParam industry_demand integer Persentase demand antara 0 dan 100. Example: 85
     * @bodyParam job_sample_size integer Jumlah sampel lowongan. Example: 200
     * @bodyParam remote_friendly boolean Apakah career mendukung kerja remote. Example: true
     * @bodyParam short_description string Ringkasan singkat career. Example: Mengembangkan sistem backend berskala besar.
     * @bodyParam description string Deskripsi lengkap career. Example: Career untuk pengembangan layanan server dan API.
     * @bodyParam responsibilities array Daftar tanggung jawab career. Example: ["Merancang arsitektur layanan"]
     * @bodyParam tools array Daftar tools yang umum digunakan. Example: ["Laravel", "Redis"]
     * @bodyParam required_skills object[] Daftar skill yang diwajibkan. Jika dikirim, daftar lama akan diganti.
     * @bodyParam required_skills[].skill_id integer required ID skill. Example: 3
     * @bodyParam required_skills[].level integer required Level skill antara 0 dan 100. Example: 80
     * @bodyParam required_skills[].importance string required Tingkat kepentingan skill. Example: high
     */
    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'category' => 'nullable|string',
            'difficulty' => 'nullable|string',
            'industry_demand' => 'nullable|integer|min:0|max:100',
            'job_sample_size' => 'nullable|integer|min:0',
            'remote_friendly' => 'nullable|boolean',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'responsibilities' => 'nullable|array',
            'tools' => 'nullable|array',
            'required_skills' => 'nullable|array',
            'required_skills.*.skill_id' => 'required_with:required_skills|exists:skills,id',
            'required_skills.*.level' => 'required_with:required_skills|integer|min:0|max:100',
            'required_skills.*.importance' => 'required_with:required_skills|string',
        ]);

        $career->update(collect($validated)->except('required_skills')->toArray());

        if (isset($validated['required_skills'])) {
            $sync = [];
            foreach ($validated['required_skills'] as $rs) {
                $sync[$rs['skill_id']] = [
                    'required_level' => $rs['level'],
                    'importance' => $rs['importance'],
                ];
            }
            $career->skills()->sync($sync);
        }

        return $this->success([
            'id' => $career->id,
            'name' => $career->name,
        ], 'Career diperbarui');
    }

    /**
     * DELETE Admin Career
     *
     * Description: Menghapus career berdasarkan ID career.
     * Relasi skill career ikut ditangani oleh konfigurasi foreign key database.
     *
        * @group Admin - Career Management
        * @authenticated
     * @urlParam career integer required ID career. Example: 1
     */
    public function destroy(Career $career)
    {
        $career->delete();

        return $this->success(null, 'Career dihapus');
    }
}