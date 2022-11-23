<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        // (?, ?,?)
        
        DB::insert('insert into commissions (id, name, description) values (?, ?,?)', [1, 'Lettres-philosophie-sciences sociales-traduction-communication',' ']);
        DB::insert('insert into commissions (id, name, description) values (?, ?,?)', [2, 'Droit-criminologie','  ']);
        DB::insert('insert into commissions (id, name, description) values (?, ?,?)', [3, 'Economie-commerce','Commission économie et commerce  ']);
        DB::insert('insert into commissions (id, name, description) values (?, ?,?)', [4, 'Enseignement obligatoire',' Services des équivalences de l\'ensignement obligatoire ']);
       // DB::insert('insert into commissions (id, name, description) values (?, ?,?)', [5, 'Médecine-Pharmacie-Sciences de la motricité-Education physique et sportive',' ']);
       // DB::insert('insert into commissions (id, name, description) values (?, ?,?)', [6, 'Arts-Culture',' ']);
   

    }
}
