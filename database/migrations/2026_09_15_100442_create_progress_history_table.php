<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('progress_history', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->unsignedTinyInteger('readiness_score');
        $table->json('skill_snapshot')->nullable();
        $table->timestamp('recorded_at')->useCurrent();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('progress_history');
}
};
