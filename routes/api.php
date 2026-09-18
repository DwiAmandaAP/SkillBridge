<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndustryInsightController;
use App\Http\Controllers\LearningResourceController;
use App\Http\Controllers\ScoringSettingController;
use App\Http\Controllers\ScrapeRunController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillTaxonomyController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Rute API Admin
Route::prefix('v1/admin')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('careers', [CareerController::class, 'index']);
        Route::post('careers', [CareerController::class, 'store']);
        Route::patch('careers/{career}', [CareerController::class, 'update']);
        Route::delete('careers/{career}', [CareerController::class, 'destroy']);

        Route::get('skills', [SkillController::class, 'index']);
        Route::post('skills', [SkillController::class, 'store']);
        Route::patch('skills/{skill}', [SkillController::class, 'update']);
        Route::delete('skills/{skill}', [SkillController::class, 'destroy']);

        Route::get('industry-insights', [IndustryInsightController::class, 'index']);
        Route::post('industry-insights', [IndustryInsightController::class, 'store']);

        Route::get('learning-resources', [LearningResourceController::class, 'index']);
        Route::post('learning-resources', [LearningResourceController::class, 'store']);
        Route::delete('learning-resources/{learningResource}', [LearningResourceController::class, 'destroy']);

        Route::get('users', [UserController::class, 'index']);

        Route::get('analytics', [AnalyticsController::class, 'index']);

        Route::get('scoring-settings', [ScoringSettingController::class, 'show']);
        Route::put('scoring-settings', [ScoringSettingController::class, 'update']);

        Route::patch('settings/industry-insight-mode', [SettingController::class, 'updateIndustryInsightMode']);

        Route::get('scrape-runs', [ScrapeRunController::class, 'index']);
        Route::post('scrape-runs/trigger', [ScrapeRunController::class, 'trigger']);
});

// Rute API scraping
Route::prefix('internal')
    ->middleware('service')
    ->group(function () {
        Route::get('skills', [SkillTaxonomyController::class, 'index']);
    });