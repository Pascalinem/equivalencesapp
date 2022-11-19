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

    public function commission(){
        return $this->belongsTo(Commission::class);
    }

}
