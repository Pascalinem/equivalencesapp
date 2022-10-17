<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'street',
        'postal_code',
        'city',
        
    ];


      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'organisations';


}
