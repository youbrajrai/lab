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
        Schema::create('serologies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->boolean('hbs_ag')->nullable();
            $table->boolean('anti_hiv')->nullable();
            $table->boolean('anti_hcv')->nullable();
            $table->boolean('vdrl')->nullable();
            $table->boolean('tpha')->nullable();
            $table->string('blood_group')->nullable();
            $table->boolean('malaria_parasite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serologies');
    }
};
