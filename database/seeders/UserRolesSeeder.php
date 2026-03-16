<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_roles')->truncate();
        DB::table('user_roles')->insert([
            [
                'user_id' => 0,
                'role_id' => 1,
            ]
        ]);
    }
}
