<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usersprojects')->insert([
            'user_id' => 1,
            'project_id' => 2,
        ]);
        DB::table('usersprojects')->insert([
            'user_id' => 1,
            'project_id' => 3,
        ]);
        DB::table('usersprojects')->insert([
            'user_id' => 2,
            'project_id' => 1,
        ]);
        DB::table('usersprojects')->insert([
            'user_id' => 3,
            'project_id' => 1,
        ]);
        DB::table('usersprojects')->insert([
            'user_id' => 4,
            'project_id' => 3,
        ]);
    }
}
