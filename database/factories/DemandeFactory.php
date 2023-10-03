<?php

namespace Database\Factories;

use App\Models\Etude;
use App\Models\Demande;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demande>
 */
class DemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        $user_id = fake()->numberBetween(1,50);
       // $etude_id = Etude::where('user_id','=',$user_id)->first()->id;

        return [
        
        'type_demande'=>fake()->randomElement($array=array('NIV','ACA')),
        'date_demande'=>fake()->date($format = 'Y-m-d', $min = '2020-12-31'),
        'statut_demande'=>fake()->numberBetween(1,5),
        'montant_frais'=>fake()->numberBetween(1,5),
        'refugie'=>fake()->numberBetween(0,1),
        'actiris'=>fake()->numberBetween(0,1),
        'vdab'=>fake()->numberBetween(0,1) ,
        'commission_id'=>fake()->numberBetween(1,5),
        'user_id'=>$user_id,
        'etude_id'=>$etude_id,
        
        ];
    }
}
