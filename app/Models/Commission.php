<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
       // 'demande_id'
        
        
    ];


      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commissions';

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function membreCommissions(){
        return $this->belongsToMany(MembreCommission::class, 'seance_commission');
    }
    
}
