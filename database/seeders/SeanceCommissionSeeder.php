<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeanceCommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into seance_commission (id,commission_id, membre_commission_id, date_seance) values (?,?, ?,?)', [1,1,1,'2022-11-23']);
        DB::insert('insert into seance_commission(id,commission_id, membre_commission_id, date_seance) values (?,?, ?,?)', [2,1,2,'2022-11-23']);
        DB::insert('insert into seance_commission(id,commission_id, membre_commission_id, date_seance) values (?,?, ?,?)', [3,1,3,'2022-11-23']);
        DB::insert('insert into seance_commission(id,commission_id, membre_commission_id, date_seance) values (?,?, ?,?)', [4,2,1,'2022-11-23']);
        DB::insert('insert into seance_commission(id,commission_id, membre_commission_id, date_seance) values (?,?, ?,?)', [5,2,6,'2022-11-23']);
    }
}
