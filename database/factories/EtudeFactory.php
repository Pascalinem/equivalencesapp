<?php

namespace Database\Factories;

use App\Models\Etude;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etude>
 */
class EtudeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start_year = fake()->numberBetween(1970,2010);
        $school_years = fake()->numberBetween(3,10);
        return [
        
        //'demande_id'=>fake()->randomElement($array=array('NIV','ACA')),
        'user_id'=>fake()->numberBetween(1,50),
        'type'=>fake()->randomElement($array=array('primaires','secondaires','supérieures')),
        'school_name'=>fake()->name(),
        'country'=>fake()->country(),
        'school_years'=>$school_years,
        'start_year'=>$start_year ,
        'end_year'=>$start_year+$school_years,        
        ];
    }
}
