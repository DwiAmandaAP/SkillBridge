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
    Schema::create('job_postings', function (Blueprint $table) {
        $table->id();
        $table->string('source');
        $table->string('source_url')->unique();
        $table->string('title');
        $table->string('company')->nullable();
        $table->string('location')->nullable();
        $table->longText('description')->nullable();
        $table->timestamp('posted_at')->nullable();
        $table->string('search_keyword')->nullable();
        $table->enum('status', ['pending', 'processed', 'failed'])->default('pending');
        $table->timestamp('scraped_at')->useCurrent();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('job_postings');
}
};
