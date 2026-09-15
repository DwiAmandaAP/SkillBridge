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
    Schema::create('scrape_runs', function (Blueprint $table) {
        $table->id();
        $table->timestamp('started_at');
        $table->timestamp('finished_at')->nullable();
        $table->enum('status', ['success', 'partial', 'failed']);
        $table->unsignedInteger('jobs_found')->default(0);
        $table->unsignedInteger('jobs_processed')->default(0);
        $table->text('error_message')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('scrape_runs');
}
};
