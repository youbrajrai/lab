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
        Schema::create('serology_reports', function (Blueprint $table) {
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

            $table->boolean('hiv_test')->nullable();
            $table->boolean('hcv')->nullable();
            $table->boolean('hbs_ag')->nullable();
            $table->boolean('vdrl')->nullable();
            $table->boolean('tpha')->nullable();
            $table->boolean('rheumatoid')->nullable();
            $table->boolean('crp')->nullable();
            $table->string('aso_titre')->nullable();
            $table->boolean('sr_k39')->nullable();
            $table->boolean('optimal_test')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serology_reports');
    }
};
