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
    Schema::create('scoring_settings', function (Blueprint $table) {
        $table->id();
        $table->decimal('technical_weight', 3, 2);
        $table->decimal('soft_weight', 3, 2);
        $table->decimal('portfolio_weight', 3, 2);
        $table->decimal('experience_weight', 3, 2);
        $table->decimal('assessment_weight', 3, 2);
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('scoring_settings');
}
};
