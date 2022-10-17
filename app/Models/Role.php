<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        
    ];

      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the users for the role.
     */
    public function users(){
        return $this->hasMany(User::class);
    }
}
