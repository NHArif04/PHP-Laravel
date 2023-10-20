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
    {                   //! php artisan make:migration add_column_to_table_name
        Schema::table('practice_update', function (Blueprint $table) {
            $table->after('name', function(Blueprint $table){
                $table->string('phone');
                $table->string('gender');
            });
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
