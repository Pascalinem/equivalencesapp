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

];

    protected $table='etudes';

    public function demande(){
        return $this->belongsTo(Demande::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
