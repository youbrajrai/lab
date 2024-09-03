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
        Schema::table('biochemistry_reports', function (Blueprint $table) {
            //
            $table->after('blood_sugar_pp', function ($table) {
                $table->integer('hba1c')->nullable();
                $table->integer('blood_urea')->nullable();
                $table->integer('s_ceratinine')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biochemistry_reports', function (Blueprint $table) {
            //
            $table->dropColumn([
                'hba1c', 'blood_urea', 's_ceratinine'
            ]);
        });
    }
};
