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
        Schema::create('biochemistries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->float('urea')->nullable();
            $table->float('creatinine')->nullable();
            $table->float('sodium')->nullable();
            $table->float('potassium')->nullable();
            $table->float('blood_sugar')->nullable();
            $table->float('sr_bilirubin_total_direct')->nullable();
            $table->float('sr_bilirubin_total')->nullable();
            $table->float('sr_bilirubin_direct')->nullable();
            $table->float('alkaline_phosphatase')->nullable();
            $table->float('sgpt')->nullable();
            $table->float('sgot')->nullable();
            $table->float('fasting_blood_sugar')->nullable();
            $table->float('blood_urea')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biochemistries');
    }
};
