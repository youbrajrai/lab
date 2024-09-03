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
        Schema::create('cannabies_pregnancy_tests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();

            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->string('address');
            $table->string('contact');
            $table->date('medical_examination_date');
            $table->string('lab');
            $table->string('referred_by');

            $table->boolean('pregnancy_test')->nullable();
            $table->boolean('cannabies_test')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cannabies_pregnancy_tests');
    }
};
