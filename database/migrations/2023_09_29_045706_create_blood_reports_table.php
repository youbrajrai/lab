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
        Schema::create('blood_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            //Applicant Details
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->string('marital_status');
            $table->date('medical_examination_date');
            $table->string('address');
            $table->string('contact');
            $table->string('passport_number');
            $table->string('specimen');
            $table->integer('sample');
            $table->string('referred_by');
            //CBC
            $table->integer('wbc');
            $table->integer('rbc_male');
            $table->integer('rbc_female');
            $table->integer('hemoglobin');
            $table->integer('platelets');
            //Differential Count
            $table->integer('neutrophils');
            $table->integer('lymphocytes');
            $table->integer('eosinophils');
            $table->integer('monocytes');
            $table->integer('basophils');
            $table->integer('pcv');
            $table->integer('mcv');
            $table->integer('mch');
            $table->integer('mchc');
            $table->integer('pt');
            $table->integer('inr');
            $table->float('esr');
            $table->integer('fasting_blood_sugar');
            $table->integer('blood_urea');
            //Serology
            $table->string('hbs_ag');
            $table->string('anti_hiv');
            $table->string('anti_hcv');
            $table->string('vdrl');
            $table->string('tpha');
            $table->string('malarial_parasites');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_reports');
    }
};
