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
    {                               // php artisan make:migration drop_column_from_table_name
        Schema::table('practice_update', function (Blueprint $table) {
            $table->dropColumn('gender', 'phone');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('practice_update', function (Blueprint $table) {
            //
        });
    }
};
