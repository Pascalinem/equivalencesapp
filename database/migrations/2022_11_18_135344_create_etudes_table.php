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
        Schema::create('etudes', function (Blueprint $table) {
            $table->id();
           // $table->string('type');
            $table->string('primary_school_name');
            $table->string('country_primary_education');
            $table->string('primary_school_years');
            $table->string('start_year_primary_school');
            $table->string('end_year_primary_school');
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
        Schema::dropIfExists('etudes');
    }
};
