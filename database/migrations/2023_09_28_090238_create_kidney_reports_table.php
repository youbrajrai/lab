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
        Schema::create('kidney_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->string('marital_status');
            $table->date('medical_examination_date');
            $table->string('address');
            $table->string('contact');
            $table->string('referred_by');
            $table->integer('lab');
            $table->integer('urea');
            $table->integer('creatinine');
            $table->integer('sodium');
            $table->integer('potassium');
            $table->integer('uric_acid_male');
            $table->integer('uric_acid_female');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kidney_reports');
    }
};
