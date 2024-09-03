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
        Schema::table('users', function (Blueprint $table) {
            $table->after('password', function ($table){
                $table->string('company_name');
                $table->string('address');
                $table->string('phone');
                $table->string('regd_no');
                $table->string('website');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'company_name', 'address', 'phone', 'regd_no','website'
            ]);
        });
    }
};
