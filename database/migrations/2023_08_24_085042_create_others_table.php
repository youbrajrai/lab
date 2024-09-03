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
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->boolean('opiates')->nullable();
            $table->boolean('cannabies')->nullable();
            $table->boolean('mantoux_test')->nullable();
            $table->boolean('urine_pregnancy_test')->nullable();
            $table->string('x_ray_requested_for')->nullable();
            $table->boolean('clinical_history')->nullable();
            $table->string('request_doctor')->nullable();
            $table->text('opinion')->nullable();
            $table->boolean('defect_seen')->nullable();
            $table->float('total_cholestrol')->nullable();
            $table->float('hdl_cholestrol')->nullable();
            $table->float('ldl_cholestrol')->nullable();
            $table->float('triglyceride')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('others');
    }
};
