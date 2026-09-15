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
    Schema::create('roadmap_phases', function (Blueprint $table) {
        $table->id();
        $table->foreignId('roadmap_id')->constrained()->cascadeOnDelete();
        $table->foreignId('skill_id')->nullable()->constrained()->nullOnDelete();
        $table->string('title');
        $table->string('priority'); // High / Medium / Low
        $table->string('status')->default('not_started'); // not_started/in_progress/completed
        $table->text('learning_objective')->nullable();
        $table->text('why')->nullable();
        $table->text('after_text')->nullable();
        $table->json('resources')->nullable();
        $table->json('tasks')->nullable();
        $table->text('mini_project')->nullable();
        $table->unsignedSmallInteger('duration_days')->nullable();
        $table->unsignedSmallInteger('sort_order')->default(0);
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('roadmap_phases');
}
};
