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
            $table->file('identity_card')->nulllable();
            $table->file('copy_diploma')->nulllable();
            $table->file('copy_transcripts_of_records')->nulllable();
            $table->file('copy_dissertation')->nulllable();
            $table->file('copy_study_program')->nulllable();
            $table->file('summary_dissertation')->nulllable();
            $table->file('copy_work_attestations')->nulllable();
            $table->file('other_documents')->nulllable();
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
