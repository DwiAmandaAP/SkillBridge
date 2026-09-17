<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
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

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout successful',
            'data' => null,
        ]);
    }

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