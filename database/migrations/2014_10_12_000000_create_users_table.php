<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\NullType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('national_number',20)->nullable();
            $table->string('name');
            $table->string('name_diploma')->nullable();
            $table->string('firstname');
            $table->string('street');
            $table->string('postal_code');
            $table->string('city');
            $table->string('country');
            $table->string('street1')->nullable();
            $table->string('postal_code1')->nullable();
            $table->string('city1')->nullable();
            $table->string('country1')->nullable();
            $table->string('email')->unique();
            $table->string('telephone', 20);
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('country_of_birth');
            $table->string('nationality');
            $table->foreignId('role_id')->constrained();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
