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
    Schema::create('careers', function (Blueprint $table) {
        $table->id();
        $table->string('slug')->unique();
        $table->string('name');
        $table->string('category')->nullable();
        $table->string('difficulty')->nullable();
        $table->unsignedTinyInteger('industry_demand')->default(0);
        $table->unsignedInteger('job_sample_size')->default(0);
        $table->boolean('remote_friendly')->default(false);
        $table->text('short_description')->nullable();
        $table->longText('description')->nullable();
        $table->json('responsibilities')->nullable();
        $table->json('tools')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('careers');
}
};
