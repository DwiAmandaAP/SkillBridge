<?php

use App\Http\Controllers\CareerController;

use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\CareerController as AdminCareerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndustryInsightController as AdminIndustryInsightController;
use App\Http\Controllers\Admin\LearningResourceController;
use App\Http\Controllers\Admin\ScoringSettingController;
use App\Http\Controllers\Admin\ScrapeRunController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\SkillTaxonomyController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserSkillController;
use App\Http\Controllers\SkillGapController;
use App\Http\Controllers\ReadinessController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\IndustryInsightController;
use App\Http\Controllers\ProgressHistoryController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\RoleInsightController;

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
    // Career (public)
    Route::get('careers', [CareerController::class, 'index']);
    Route::get('careers/{slug}', [CareerController::class, 'show']);
    
    Route::post('auth/register', [AuthController::class, 'register']);
    Route::post('auth/login', [AuthController::class, 'login']);

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

        // Assessment
        Route::get('assessment/questions', [AssessmentController::class, 'questions']);
        Route::post('assessment/submit', [AssessmentController::class, 'submit']);

        // Roadmap
        Route::post('roadmap/generate', [RoadmapController::class, 'generate']);
        Route::get('roadmap', [RoadmapController::class, 'index']);
        Route::patch('roadmap/phases/{id}', [RoadmapController::class, 'updatePhase']);

        // Portfolio
        Route::get('portfolio', [PortfolioController::class, 'index']);
        Route::patch('portfolio/checklist/{item_code}', [PortfolioController::class, 'updateChecklist']);

        Route::get('portfolio/certificates', [CertificateController::class, 'index']);
        Route::post('portfolio/certificates', [CertificateController::class, 'store']);
        Route::delete('portfolio/certificates/{id}', [CertificateController::class, 'destroy']);
        
        Route::post('portfolio/github-analyze', [PortfolioController::class, 'githubAnalyze']);
        });
});
        
        
// Rute API Scraping / Internal
Route::prefix('internal')
    ->middleware('service')
    ->group(function () {
        Route::get('skills', [SkillTaxonomyController::class, 'index']);
 });
        
// Rute Industry Insight
 Route::prefix('v1')->group(function () {
    Route::get('industry-insights', [IndustryInsightController::class, 'index']);
    Route::get('industry-insights/{skill_id}/trend', [IndustryInsightController::class, 'trend']);
        
    Route::get('role-insights', [RoleInsightController::class, 'index']);
    Route::get('role-insights/{roleSlug}/trend', [RoleInsightController::class, 'trend']);
});


// Rute API Admin
Route::prefix('v1/admin')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {

        // Admin Dashboard
        Route::get('dashboard', [DashboardController::class, 'index']);

        // Career Management
        Route::get('careers', [AdminCareerController::class, 'index']);
        Route::post('careers', [AdminCareerController::class, 'store']);
        Route::patch('careers/{career}', [AdminCareerController::class, 'update']);
        Route::delete('careers/{career}', [AdminCareerController::class, 'destroy']);

        // Skill Management
        Route::get('skills', [SkillController::class, 'index']);
        Route::post('skills', [SkillController::class, 'store']);
        Route::patch('skills/{skill}', [SkillController::class, 'update']);
        Route::delete('skills/{skill}', [SkillController::class, 'destroy']);

        // Industry Insights Admin
        Route::get('industry-insights', [AdminIndustryInsightController::class, 'index']);
        Route::post('industry-insights', [AdminIndustryInsightController::class, 'store']);

        // Learning Resources
        Route::get('learning-resources', [LearningResourceController::class, 'index']);
        Route::post('learning-resources', [LearningResourceController::class, 'store']);
        Route::delete(
            'learning-resources/{learningResource}',
            [LearningResourceController::class, 'destroy']
        );

        // User Management
        Route::get('users', [UserController::class, 'index']);

        // Analytics
        Route::get('analytics', [AnalyticsController::class, 'index']);

        // Scoring Settings
        Route::get('scoring-settings', [ScoringSettingController::class, 'show']);
        Route::put('scoring-settings', [ScoringSettingController::class, 'update']);

        // Settings
        Route::patch(
            'settings/industry-insight-mode',
            [SettingController::class, 'updateIndustryInsightMode']
        );

        // Scrape Runs
        Route::get('scrape-runs', [ScrapeRunController::class, 'index']);
        Route::post('scrape-runs/trigger', [ScrapeRunController::class, 'trigger']);
});


