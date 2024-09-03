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
        Schema::create('systemic_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->string('cardiovascular')->nullable();
            $table->string('pulmonary')->nullable();
            $table->string('gastroenterology')->nullable();
            $table->string('neurology')->nullable();
            $table->string('musculoskeletal')->nullable();
            $table->string('genitourinary')->nullable();
            $table->boolean('dental')->nullable();
            $table->string('extremities_deformities')->nullable();
            $table->boolean('varicose_veins')->nullable();
            $table->boolean('hernia')->nullable();
            $table->string('hydrocele')->nullable();
            $table->string('left_eye')->nullable();
            $table->string('right_eye')->nullable();
            $table->boolean('left_ear')->nullable();
            $table->boolean('right_ear')->nullable();
            $table->string('others')->nullable();
            $table->boolean('chest_x_ray')->nullable();
            $table->boolean('ecg')->nullable();
            $table->boolean('clinical_impression')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('systemic_exams');
    }
};
