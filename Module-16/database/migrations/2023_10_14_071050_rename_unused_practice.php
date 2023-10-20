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
    {                                                                           // -> optional just create a migration file
        Schema::rename('unused_practice', 'practice_unused');         // php artisan make:migration rename_tableName
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
