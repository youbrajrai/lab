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
        Schema::create('biochemistry_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->date('medical_examination_date');
            $table->string('address');
            $table->string('contact');
            $table->string('referred_by');
            $table->integer('lab');

            $table->integer('blood_sugar_r');
            $table->integer('blood_sugar_f');
            $table->integer('blood_sugar_pp');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biochemistry_reports');
    }
};
