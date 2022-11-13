<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembreCommissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance, commission_id) values (?,?,?,?)', [1, 15, 900, 1]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance, commission_id) values (?,?,?,?)', [2, 2,600,2]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance, commission_id) values (?,?,?,?)', [3,9,800,1]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance, commission_id) values (?,?,?,?)', [4,8,600,3]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance, commission_id) values (?,?,?,?)', [5,22,600,3]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance, commission_id) values (?,?,?,?)', [6, 3,600,4]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance) values (?,?,?)', [7,17,800]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance) values (?,?,?)', [9,20,600]);
        DB::insert('insert into membre_commissions (id, user_id, forfait_seance, commission_id) values (?,?,?,?)', [8,22,600,4]);
    }
}
