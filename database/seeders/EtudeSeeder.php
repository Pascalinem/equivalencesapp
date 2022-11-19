<?php

namespace Database\Seeders;

use App\Models\Etude;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $etudes = [

            ['type' => 'primaires','user_id'=>'22','school_name' => 'ecole0', 'country' => 'Belgique','school_years'=>'6','start_year'=>'1988','end_year'=>'1994',],

           // ['type' => 'primaires', 'school_name'=>'ecole1','country'=>'Congo','school_years'=>'7','start_year'=>'2005','end_year'=>'2013',],

            //['type' => 'supérieures','school_name'=>'ecole2','country'=>'Irlande','school_years'=>'6','start_year'=>'1979','end_year'=>'1984',],

        ];

          

        foreach ($etudes as $key => $value) {

            Etude::create($value);

        }
    }
}
