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
            $table->string('type_demande',20)->nullable();
            $table->date('date_demande')->nullable();
            $table->string('statut_demande',20)->default('En cours');
            $table->double('montant_frais')->nullable();
            $table->tinyInteger('refugie')->nullable();
            $table->tinyInteger('actiris')->nullable();
            $table->tinyInteger('vdab')->nullable();
            $table->string('statut',20)->nullable();
            $table->foreignId('commission_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('gestionnaire_id')->nullable();
            $table->foreignId('etude_id')->nullable();
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
