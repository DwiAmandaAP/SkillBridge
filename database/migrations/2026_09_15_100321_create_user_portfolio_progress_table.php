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
    Schema::create('user_portfolio_progress', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->foreignId('checklist_item_id')->constrained('portfolio_checklist_items')->cascadeOnDelete();
        $table->boolean('done')->default(false);
        $table->timestamps();

        $table->unique(['user_id', 'checklist_item_id']);
    });
}

public function down(): void
{
    Schema::dropIfExists('user_portfolio_progress');
}
};
