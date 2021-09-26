<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'task_name' => "Product Pages",
            'hours' => 5,
            'user_id' => 3,
            'project_id' => 1,
            'created_at' => Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'task_name' => "Shopping Cart",
            'hours' => 10,
            'user_id' => 2,
            'project_id' => 1,
            'created_at' => Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'task_name' => "My Account",
            'hours' => 5,
            'user_id' => 3,
            'project_id' => 1,
            'created_at' => Carbon::now(),
        ]);

        DB::table('tasks')->insert([
            'task_name' => "Add to Socket IO",
            'hours' => 2,
            'user_id' => 1,
            'project_id' => 2,
            'created_at' => Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'task_name' => "Enable Broadcasting",
            'hours' => 5,
            'user_id' => 1,
            'project_id' => 2,
            'created_at' => Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'task_name' => "Adjust Interface",
            'hours' => 3,
            'user_id' => 1,
            'project_id' => 2,
            'created_at' => Carbon::now(),
        ]);

        DB::table('tasks')->insert([
            'task_name' => "Upgrade Angular",
            'hours' => 15,
            'user_id' => 4,
            'project_id' => 3,
            'created_at' => Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'task_name' => "Fix Broken Things",
            'hours' => 10,
            'user_id' => 1,
            'project_id' => 3,
            'created_at' => Carbon::now(),
        ]);
        DB::table('tasks')->insert([
            'task_name' => "Test",
            'hours' => 10,
            'user_id' => 4,
            'project_id' => 3,
            'created_at' => Carbon::now(),
        ]);

    }
}
