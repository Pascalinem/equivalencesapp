<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentDemande extends Model
{
    use HasFactory;

    protected $fillable = [

        'demande_id',
        'user_id',
        'identity_card',
        'copy_diploma',
        'certified_copy_diploma',
        'copy_transcripts_of_records',
        'certified_copy_transcripts_of_records',
        'copy_dissertation',
        'copy_study_program',
        'summary_dissertation',
        'copy_work_attestations',
        'other_documents'

    ];

    protected $table='document-demandes';

}
