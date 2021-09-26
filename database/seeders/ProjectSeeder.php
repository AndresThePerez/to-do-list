<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'project_name' => "E-commerce Website",
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'project_name' => "Websocket Updates",
            'created_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'project_name' => "Angular Upgrade",
            'created_at' => Carbon::now(),
        ]);
    }
}
