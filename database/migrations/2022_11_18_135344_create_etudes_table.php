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
            $table->foreignId('demande_id')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->string('type')->nullable();
            $table->string('school_name');
            $table->string('country');
            $table->string('school_years');
            $table->string('start_year');
            $table->string('end_year');
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
