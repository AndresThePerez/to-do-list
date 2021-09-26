<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Stuart",
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => "Tyler",
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => "Adam",
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => "Lan",
            'created_at' => Carbon::now(),
        ]);
    }
}
