<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    use HasFactory;

    protected $fillable =
    ['primary_school_name',
    'country_primary_education',
    'primary_school_years',
    'start_year_primary_school',
    'end_year_primary_school',

];

    protected $table='etudes';
}
