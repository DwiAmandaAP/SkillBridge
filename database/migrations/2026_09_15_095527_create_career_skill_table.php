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
    Schema::create('career_skill', function (Blueprint $table) {
        $table->id();
        $table->foreignId('career_id')->constrained()->cascadeOnDelete();
        $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
        $table->unsignedTinyInteger('required_level');
        $table->string('importance'); // e.g. critical / important / optional
        $table->timestamps();

        $table->unique(['career_id', 'skill_id']);
    });
}

public function down(): void
{
    Schema::dropIfExists('career_skill');
}
};
