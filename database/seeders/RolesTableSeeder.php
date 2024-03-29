<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('roles')->truncate();
        DB::insert('insert into roles (id, name) values (?, ?)', [1, 'admin']);
        DB::insert('insert into roles (id, name) values (?, ?)', [3, 'gestionnaire']);
        DB::insert('insert into roles (id, name) values (?, ?)', [2, 'chef']);
        DB::insert('insert into roles (id, name) values (?, ?)', [5, 'demandeur']);
        DB::insert('insert into roles (id, name) values (?, ?)', [4, 'membre_commission']);
    }
}
