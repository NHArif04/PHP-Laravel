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
        Schema::create('used_practice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_Bangladeshi');
            $table->bigInteger('votes');
            $table->binary('photo');
            $table->char('full_name', 50);
            $table->dateTime('vote_date_time');
            $table->date('vote_time');
            $table->double('average_income');
            $table->enum('Elect', ['Nahid', 'Hasan', 'Arif']);
            $table->string('name');
            $table->string('city');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('used_practice');
    }
};
