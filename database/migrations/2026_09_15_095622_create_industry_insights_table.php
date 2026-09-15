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
    Schema::create('industry_insights', function (Blueprint $table) {
        $table->id();
        $table->foreignId('skill_id')->unique()->constrained()->cascadeOnDelete();
        $table->unsignedTinyInteger('demand');
        $table->string('trend'); // e.g. up / down / stable
        $table->unsignedInteger('job_sample_size')->default(0);
        $table->string('period')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('industry_insights');
}
};
