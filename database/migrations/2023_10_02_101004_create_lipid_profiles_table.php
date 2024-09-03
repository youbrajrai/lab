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
        Schema::create('lipid_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->date('medical_examination_date');
            $table->string('referred_by');
            $table->string('lab');
            $table->integer('total_cholestrol');
            $table->integer('hdl_cholestrol');
            $table->integer('ldl_cholestrol');
            $table->integer('triglyceride');
            $table->string('others');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lipid_profiles');
    }
};
