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
        Schema::create('urine_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->string('address');
            $table->string('contact');
            $table->date('medical_examination_date');
            $table->string('referred_by');
            $table->string('lab');

            // physical examination
            $table->string('color')->nullable();
            $table->string('transparency')->nullable();
            $table->string('sp_gravity')->nullable();

            // chemical examination
            $table->string('reaction')->nullable();
            $table->string('albumin')->nullable();
            $table->string('sugar')->nullable();
            $table->string('urobilinogen')->nullable();
            $table->string('bile_salt')->nullable();
            $table->string('bile_pigment')->nullable();
            $table->string('pregnancy_test')->nullable();
            $table->string('cannabies_test')->nullable();

            // microscopic examination
            $table->string('pus_cell')->nullable();
            $table->string('rbc')->nullable();
            $table->string('epithelial_cells')->nullable();
            $table->string('urates')->nullable();
            $table->string('casts')->nullable();
            $table->string('ca_oxalate')->nullable();
            $table->string('other')->nullable();

            $table->string('acetone')->nullable();
            $table->string('ketone_bodies')->nullable();
            $table->string('nitrite')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urine_reports');
    }
};
