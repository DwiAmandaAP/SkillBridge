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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email')->unique();
        $table->string('password');
        $table->enum('role', ['student', 'admin'])->default('student');
        $table->string('university')->nullable();
        $table->string('major')->nullable();
        $table->unsignedTinyInteger('semester')->nullable();
        $table->unsignedSmallInteger('graduation_year')->nullable();
        $table->foreignId('target_career_id')->nullable()
            ->constrained('careers')->nullOnDelete();
        $table->unsignedTinyInteger('target_timeline_months')->nullable();
        $table->string('github_username')->nullable();
        $table->boolean('onboarding_complete')->default(false);
        $table->rememberToken();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('users');
}
};
