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
        Schema::create('unused_practice', function (Blueprint $table) {
            //!? for practice purpose 
            $table->smallIncrements('id');
            $table->float('dollar');
            $table->geometryCollection('position');
            $table->geometry('position_2');
            $table->integer('population');
            $table->ipAddress('visitor');
            $table->json('user_details');
            $table->longText('blog_post');
            
            // $table->mediumIncrements('id') ;   //primary key duplicate
            $table->smallInteger('id_2');
            $table->mediumInteger('id_4');
            $table->string('address');
            $table->time('time');
            $table->timestamp('new_time');
            $table->timestamps();
            // $table->timestampsTz();          //unknown error
            $table->unsignedBigInteger('bye_8_positive');
            $table->unsignedInteger('byte_4_positive');
            $table->unsignedMediumInteger('byte_3_positive');
            $table->unsignedTinyInteger('byte_1_positive');
            $table->tinyInteger('byte_1_number');
            $table->text('normal_text');
            $table->tinyText('small_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unused_practice');
    }
};
