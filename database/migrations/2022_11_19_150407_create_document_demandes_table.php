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
            $table->string('identity_card')->nulllable();
            $table->string('copy_diploma')->nulllable();
            $table->string('copy_transcripts_of_records')->nulllable();
            $table->string('copy_dissertation')->nulllable();
            $table->string('copy_study_program')->nulllable();
            $table->string('summary_dissertation')->nulllable();
            $table->string('copy_work_attestations')->nulllable();
            $table->string('other_documents')->nulllable();
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
