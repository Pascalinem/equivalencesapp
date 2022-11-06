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
           // $table->string('numero_national,20');
            $table->string('name');
            $table->string('firstname');
            $table->string('street');
            $table->string('postal_code');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('telephone', 20);
            $table->string('sexe')->nullable();
            $table->string('pays_naissance');
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
