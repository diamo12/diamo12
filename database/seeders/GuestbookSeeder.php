<?php

namespace Database\Seeders;

use App\Models\Guestbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        //
        Guestbook::insert([
            [
                'id' => 0,
                'name' => 'diamo12',
                'website_url' => 'https://diamo12.net',
                'message' => 'A fun place for me to hang out on the internet.'
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
