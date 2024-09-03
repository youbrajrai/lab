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
        Schema::create('xray_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->string('country');
            $table->string('requested_for');
            $table->string('clinical_history');
            $table->string('clinical_other')->nullable();
            $table->string('requested_by');
            $table->date('medical_examination_date');

            $table->string('radiologist_opinion')->nullable();
            $table->string('defect_seen');
            $table->string('other')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xray_reports');
    }
};
