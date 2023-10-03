<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    use HasFactory;

    protected $fillable =
    ['type',
    'demande_id',
    'user_id',
    'school_name',
    'country',
    'school_years',
    'start_year',
    'end_year',
    'gestionnaire'

];

    protected $table='etudes';

    public function demande(){
        return $this->belongsTo(Demande::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    
    public function statut_demande_name(){
        $statut="";

        switch ($this->demande->statut_demande){

            case 1:
                $statut = "En cours";
            break;
            case 2:
                $statut = "En Attente avis commission";
            break;
            case 3:
                $statut = "Avis";
            break;
            case 4:
                $statut = "Décision";
            break;
            default :
                $statut = "En cours";
       
        }

        return $statut;
    }

}
