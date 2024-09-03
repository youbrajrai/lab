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
        Schema::create('general_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->float('height');
            $table->float('weight');
            $table->float('pulse');
            $table->float('temperature');
            $table->string('blood_pressure');
            $table->boolean('jaundice');
            $table->boolean('paller');
            $table->boolean('cynosis');
            $table->boolean('clubbing');
            $table->boolean('odema');
            $table->boolean('ascitis');
            $table->boolean('lymph_node');
            $table->boolean('serious_illness');
            $table->boolean('allergy_history');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_exams');
    }
};
