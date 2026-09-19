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
    Schema::create('role_demand_history', function (Blueprint $table) {
        $table->id();
        $table->string('role');
        $table->string('region')->nullable(); // null = global (semua region)
        $table->unsignedInteger('job_count'); // jumlah lowongan role ini
        $table->unsignedInteger('total_jobs'); // total lowongan (pembagi)
        $table->unsignedTinyInteger('percentage');
        $table->string('trend');
        $table->string('period');
        $table->timestamp('recorded_at')->useCurrent();
        $table->timestamps();

        $table->index(['role', 'region', 'recorded_at'], 'rdh_role_region_recorded_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('role_demand_history');
    }
};
