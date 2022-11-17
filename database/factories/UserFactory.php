<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'name_diploma' => fake()->lastName(),
            'firstname'=>fake()->firstName($gender='X'|'M'|'F'),
            'street'=>fake()->streetAddress() ,
            'postal_code'=>fake()->postcode,
            'city'=>fake()->city,
            'country'=>fake()->country,
            'street1'=>fake()->streetAddress() ,
            'postal_code1'=>fake()->postcode,
            'city1'=>fake()->city,
            'country1'=>fake()->country,
            'gender'=>fake()->randomElement($array=array('X','M','F')),
            'date_of_birth'=>fake()->date($format = 'Y-m-d', $max = '2007-12-31'),
            'place_of_birth'=>fake()->city,
            'country_of_birth'=>fake()->country,
            'nationality'=>fake()->country,
            'telephone'=>fake()->phoneNumber,
            'role_id'=>fake()->numberBetween(1,5),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
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
