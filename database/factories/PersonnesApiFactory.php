<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PersonnesApiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'national_number'=>fake()->rrn(),
            'name' => fake()->lastName(),
            'firstname'=>fake()->firstName($gender='X'|'M'|'F'),
            'gender'=>fake()->randomElement($array=array('X','M','F')),
            'date_of_birth'=>fake()->date($format = 'Y-m-d', $max = '2007-12-31'),
            'place_of_birth'=>fake()->city,
            'country_of_birth'=>fake()->country,
            'nationality'=>fake()->country,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
