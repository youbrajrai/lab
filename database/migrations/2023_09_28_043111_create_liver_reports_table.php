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
        Schema::create('liver_reports', function (Blueprint $table) {
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
            $table->integer('sr_bilirubin_total');
            $table->integer('sr_bilirubin_direct');
            $table->integer('alkaline_phosphate');
            $table->integer('sgpt');
            $table->integer('sgot');
            $table->integer('total_protein');
            $table->integer('serum_albumin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liver_reports');
    }
};
