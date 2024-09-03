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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            
            $table->string('cno');
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->string('marital_status');
            $table->integer('passport_number')->nullable();
            $table->date('passport_expiry')->nullable();
            $table->date('medical_examination_date');
            $table->string('passport_issue_place')->nullable();
            $table->string('job_title');
            $table->string('nationality');
            $table->string('job_country');
            $table->string('referred_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
