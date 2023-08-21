<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Commission;
use App\Models\PersonnesApi;
use Illuminate\Database\Seeder;
use App\Models\MembreCommission;
use Database\Seeders\CommissionSeeder;

class DatabaseSeeder extends Seeder
{
    
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
        ]);
        \App\Models\User::factory(30)->create();
        PersonnesApi::factory(300)->create();
        $this->call([
            MembreCommissionSeeder::class,
            CommissionSeeder::class,
            CountrySeeder::class,
            EtudeSeeder::class,
            SeanceCommissionSeeder::class,
        ]);

   

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
    }
}
