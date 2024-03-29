<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_demande',
        'date_demande',
        'statut_demande',
        'montant_frais',
        'refugie',
        'actiris',
        'vdab',
        'statut',
        'commission_id',
        'user_id',
        'etude_id',
        'gestionnaire_id',
        'commentaire',
    ];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'demandes';
        /**
     * Get the user that has the role.
     */

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public function etude(){
        return $this->belongsTo(Etude::class);
    }

    public function commission(){
        return $this->belongsTo(Commission::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function gestionnaire(){
        return $this->belongsTo(User::class,'gestionnaire_id','id');
    }

    public function statut_demande_name(){
        $statut="";

        switch ($this->statut_demande){

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
