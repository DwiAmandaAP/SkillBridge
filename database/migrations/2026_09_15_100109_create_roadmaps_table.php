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
    Schema::create('roadmaps', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
        $table->foreignId('target_career_id')->constrained('careers')->cascadeOnDelete();
        $table->timestamp('generated_at')->useCurrent();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('roadmaps');
}
};
