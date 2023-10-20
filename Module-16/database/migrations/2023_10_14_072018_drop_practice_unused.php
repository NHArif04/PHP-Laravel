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
    {                                                          // php artisan make:migration drop_tableName  ->optional just create a migration file
        Schema::dropIfExists('practice_unused');        // or use drop('table_name') method
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
