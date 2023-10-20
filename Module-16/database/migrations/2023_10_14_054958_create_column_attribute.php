<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'column_attribute', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'fname', 50 );
            $table->string( 'lname', 50 )->nullable();
            $table->string( 'email', 50 )->unique();
            $table->string( 'country', 50 )->default( 'Bangladesh' );
            $table->string( 'pin_code', 50 )->default( '1234' )->invisible();       //invisible must have default value
            $table->timestamp( 'create_date' )->useCurrent();
            $table->timestamp( 'update_date' )->useCurrent()->useCurrentOnUpdate();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'column_attribute' );
    }
};
