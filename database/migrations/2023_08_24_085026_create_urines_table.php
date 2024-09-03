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
        Schema::create('urines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->string('urine_color')->nullable();
            $table->string('transparency')->nullable();
            $table->string('reaction')->nullable();
            $table->float('albumin_sugar')->nullable();
            $table->string('albumin')->nullable();
            $table->string('sugar')->nullable();
            $table->string('urobilinogen')->nullable();
            $table->string('bile_salt')->nullable();
            $table->string('bile_pigment')->nullable();
            $table->string('acetone')->nullable();
            $table->string('ketone_bodies')->nullable();
            $table->string('nitrite')->nullable();
            $table->float('pus_cells')->nullable();
            $table->float('rbc_hpf')->nullable();
            $table->float('epithelial_cells')->nullable();
            $table->float('urates')->nullable();
            $table->string('casts')->nullable();
            $table->string('ca_oxalate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urines');
    }
};
