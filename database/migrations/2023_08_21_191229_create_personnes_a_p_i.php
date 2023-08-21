<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes_api', function (Blueprint $table) {
            $table->id();
            $table->string('national_number',20)->nullable();
            $table->string('name');
            $table->string('firstname');
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnes_api');
    }
};
