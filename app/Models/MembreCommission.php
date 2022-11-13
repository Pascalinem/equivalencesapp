<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembreCommission extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'forfait_seance',
        
        
    ];

      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'membre_commissions';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;


    public function commissions(){
        return $this->belongsToMany(Commission::class,'seance_commission');
    }
}
