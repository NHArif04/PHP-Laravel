<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {//? composer require doctrine/dbal  -> install before migration
        //! php artisan make:migration rename_column_to_practice_update
        Schema::table( 'practice_update', function ( Blueprint $table ) {
            $table->renameColumn( 'name', 'full_name' );
            $table->renameColumn( 'state', 'city' );
            $table->renameColumn( 'region', 'country' );
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table( 'practice_update', function ( Blueprint $table ) {
            //
        } );
    }
};
