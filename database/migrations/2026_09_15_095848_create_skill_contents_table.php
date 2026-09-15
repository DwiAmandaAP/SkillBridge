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
    Schema::create('skill_contents', function (Blueprint $table) {
        $table->id();
        $table->foreignId('skill_id')->unique()->constrained()->cascadeOnDelete();
        $table->text('objective')->nullable();
        $table->text('why')->nullable();
        $table->text('after_text')->nullable();
        $table->json('tasks')->nullable();
        $table->text('mini_project')->nullable();
        $table->unsignedSmallInteger('duration_days')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('skill_contents');
}
};
