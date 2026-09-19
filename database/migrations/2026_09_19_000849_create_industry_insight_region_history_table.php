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
    Schema::create('industry_insight_region_history', function (Blueprint $table) {
        $table->id();
        $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
        $table->string('region');
        $table->unsignedTinyInteger('demand');
        $table->string('trend');
        $table->unsignedInteger('job_sample_size')->default(0);
        $table->string('period');
        $table->timestamp('recorded_at')->useCurrent();
        $table->timestamps();

        $table->index(['skill_id', 'region', 'recorded_at'], 'iirh_skill_region_recorded_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('industry_insight_region_history');
    }
};
