<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CareerController as AdminCareerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndustryInsightController;
use App\Http\Controllers\LearningResourceController;
use App\Http\Controllers\ScoringSettingController;
use App\Http\Controllers\ScrapeRunController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillTaxonomyController;
use Illuminate\Support\Facades\Route;;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserSkillController;
use App\Http\Controllers\SkillGapController;
use App\Http\Controllers\ReadinessController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\IndustryInsightController as UserIndustryInsightController;
use App\Http\Controllers\ProgressHistoryController;
use App\Http\Controllers\AchievementController;
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
// Rute API Auth
Route::prefix('v1')->group(function () {
    Route::post('auth/register', [AuthController::class, 'register']);
    Route::post('auth/login', [AuthController::class, 'login']);

    // Career (public)
    Route::get('careers', [CareerController::class, 'index']);
    Route::get('careers/{slug}', [CareerController::class, 'show']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('auth/logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
        Route::patch('me', [AuthController::class, 'updateProfile']);
        
        Route::get('me/skills', [UserSkillController::class, 'index']);
        Route::post('me/skills', [UserSkillController::class, 'store']);
        Route::post('onboarding', [OnboardingController::class, 'store']);
        Route::get('skill-gap', [SkillGapController::class, 'index']);
        Route::get('readiness-score', [ReadinessController::class, 'index']);
        Route::get('progress-history', [ProgressHistoryController::class, 'index']);
        Route::get('achievements', [AchievementController::class, 'index']);

        Route::get('assessment/questions', [AssessmentController::class, 'questions']);
        Route::post('assessment/submit', [AssessmentController::class, 'submit']);
        Route::post('roadmap/generate', [RoadmapController::class, 'generate']);
        Route::get('roadmap', [RoadmapController::class, 'index']);
        Route::patch('roadmap/phases/{id}', [RoadmapController::class, 'updatePhase']);
        Route::get('portfolio', [PortfolioController::class, 'index']);
        Route::patch('portfolio/checklist/{item_code}', [PortfolioController::class, 'updateChecklist']);
        Route::get('portfolio/certificates', [CertificateController::class, 'index']);
        Route::post('portfolio/certificates', [CertificateController::class, 'store']);
        Route::delete('portfolio/certificates/{id}', [CertificateController::class, 'destroy']);
        Route::post('portfolio/github-analyze', [PortfolioController::class, 'githubAnalyze']);

        Route::get('industry-insights', [UserIndustryInsightController::class, 'index']);
    });
});

// Rute API Admin
Route::prefix('v1/admin')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('careers', [AdminCareerController::class, 'index']);
        Route::post('careers', [AdminCareerController::class, 'store']);
        Route::patch('careers/{career}', [AdminCareerController::class, 'update']);
        Route::delete('careers/{career}', [AdminCareerController::class, 'destroy']);

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