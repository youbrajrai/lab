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
        Schema::create('hematologies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->float('wbc')->nullable();
            $table->float('rbc')->nullable();
            $table->float('hemoglobin')->nullable();
            $table->float('platelets')->nullable();
            $table->float('neutrophils')->nullable();
            $table->float('lymphocytes')->nullable();
            $table->float('eosinophils')->nullable();
            $table->float('monocytes')->nullable();
            $table->float('basophils')->nullable();
            $table->float('esr')->nullable();
            $table->int('malaria_parasite')->nullable();
            $table->int('micro_filaria')->nullable();
            $table->float('pcv')->nullable();
            $table->float('mcv')->nullable();
            $table->float('mch')->nullable();
            $table->float('mchc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hematologies');
    }
};
