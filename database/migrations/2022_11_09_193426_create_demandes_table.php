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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('type_demande',20);
            $table->date('date_demande');
            $table->string('statut_demande',20);
            $table->double('montant_frais');
            $table->tinyInteger('refugie');
            $table->tinyInteger('actiris');
            $table->tinyInteger('vdab');
            $table->string('statut',20);
            $table->foreignId('commission_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('demandes');
    }
};
