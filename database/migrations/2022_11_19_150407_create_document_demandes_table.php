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
        Schema::create('document_demandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demande_id');
            $table->foreignId('user_id');
            $table->string('identity_card')->nullable();
            $table->string('copy_diploma')->nullable();
            $table->string('copy_transcripts_of_records')->nullable();
            $table->string('copy_dissertation')->nullable();
            $table->string('copy_study_program')->nullable();
            $table->string('summary_dissertation')->nullable();
            $table->string('copy_work_attestations')->nullable();
            $table->string('other_documents')->nullable();
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
        Schema::dropIfExists('document_demandes');
    }
};
