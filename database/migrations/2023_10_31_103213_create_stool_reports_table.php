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
        Schema::create('stool_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->string('contact');
            $table->date('medical_examination_date');
            $table->string('referred_by')->nullable();
            $table->string('lab');

            // physical examination
            $table->string('consistency')->nullable();
            $table->string('colour')->nullable();
            $table->string('blood')->nullable();
            $table->string('mucus')->nullable();

            // chemical examination
            $table->string('reaction')->nullable();
            $table->string('ocult_blood')->nullable();
            $table->string('r_s')->nullable();
            $table->string('chemical_others')->nullable();

            // microscopic examination
            $table->string('protozoal_parasite')->nullable();

            $table->string('cyst_of')->nullable();
            $table->string('tryphozoite_of')->nullable();

            $table->string('helmeinthic_parasite')->nullable();

            $table->string('r_b_c')->nullable();
            $table->string('pus_cells')->nullable();
            $table->string('undigested_food')->nullable();
            $table->string('microscopic_others')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stool_reports');
    }
};
