<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->truncate();
        DB::table('roles')->insert([
            [
                'id'   => 1,
                'role' => 'Global admin',
                'description' => 'can add/edit/delete/publish all data',
            ],
            [
                'id'   => 2,
                'role' => 'User admin',
                'description' => 'can add/edit/delete users for allowed schools or campuses',
            ],
        ]);
    }
}
