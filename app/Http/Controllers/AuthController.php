<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * POST Register
     *
     * Description: Membuat akun mahasiswa baru dan mengembalikan data pengguna
     * beserta token autentikasi Sanctum.
     *
      * @group Authentication
      * @unauthenticated
     * @bodyParam full_name string required Nama lengkap pengguna. Example: Budi Santoso
     * @bodyParam email string required Alamat email unik pengguna. Example: budi@example.com
     * @bodyParam password string required Kata sandi minimal 8 karakter. Example: rahasia123
     * @bodyParam university string required Nama universitas. Example: Universitas Indonesia
     * @bodyParam major string required Program studi. Example: Informatika
     * @bodyParam semester integer required Semester saat ini, antara 1 dan 20. Example: 6
     * @bodyParam graduation_year integer required Tahun kelulusan, antara 2000 dan 2100. Example: 2027
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'university' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'semester' => 'required|integer|min:1|max:20',
            'graduation_year' => 'required|integer|min:2000|max:2100',
        ]);

        $user = User::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'student',
            'university' => $validated['university'],
            'major' => $validated['major'],
            'semester' => $validated['semester'],
            'graduation_year' => $validated['graduation_year'],
            'onboarding_complete' => false,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Registration successful',
            'data' => [
                'user' => $user,
                'token' => $token,
            ],
        ], 201);
    }

    /**
     * POST Login
     *
     * Description: Memvalidasi kredensial pengguna dan mengembalikan token autentikasi Sanctum.
     *
      * @group Authentication
      * @unauthenticated
     * @bodyParam email string required Alamat email terdaftar. Example: budi@gmail.com
     * @bodyParam password string required Kata sandi akun. Example: password
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid email or password',
                'data' => null,
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Login successful',
            'data' => [
                'user' => $user,
                'token' => $token,
            ],
        ]);
    }

    /**
     * POST Logout
     *
     * Description: Menghapus token akses yang sedang digunakan sehingga sesi API pengguna berakhir.
      *
      * @group Authentication
      * @authenticated
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout successful',
            'data' => null,
        ]);
    }

    /**
     * GET Current User
     *
     * Description: Mengambil profil pengguna yang sedang terautentikasi.
      *
      * @group Authentication
      * @authenticated
     */
    public function me(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'User profile retrieved successfully',
            'data' => [
                'user' => $request->user(),
            ],
        ]);
    }

    /**
     * PATCH Update Profile
     *
     * Description: Memperbarui sebagian data profil pengguna yang sedang terautentikasi.
     * Field yang tidak dikirim tidak akan diubah.
     *
      * @group Authentication
      * @authenticated
     * @bodyParam full_name string Nama lengkap pengguna. Example: Budi Santoso
     * @bodyParam university string Nama universitas. Example: Universitas Indonesia
     * @bodyParam major string Program studi. Example: Informatika
     * @bodyParam semester integer Semester saat ini, antara 1 dan 20. Example: 6
     * @bodyParam graduation_year integer Tahun kelulusan, antara 2000 dan 2100. Example: 2027
     * @bodyParam target_career_id integer ID career tujuan. Example: 1
     * @bodyParam target_timeline_months integer Target waktu belajar dalam bulan. Example: 12
     * @bodyParam github_username string Username GitHub pengguna. Example: budisantoso
     */
    public function updateProfile(Request $request)
    {   
        $validated = $request->validate([
            'full_name' => 'sometimes|string|max:255',
            'university' => 'sometimes|string|max:255',
            'major' => 'sometimes|string|max:255',
            'semester' => 'sometimes|integer|min:1|max:20',
            'graduation_year' => 'sometimes|integer|min:2000|max:2100',
            'target_career_id' => 'sometimes|nullable|exists:careers,id',
            'target_timeline_months' => 'sometimes|nullable|integer|min:1',
            'github_username' => 'sometimes|nullable|string|max:255',
        ]);

        $user = $request->user();

        $user->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Profile updated successfully',
            'data' => [
                'user' => $user->fresh(),
            ],
        ]);
    }
}