<?php

namespace Database\Seeders;

use App\Models\Guestbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Guestbook::create([
            [
                'id' => 0,
                'name' => 'diamo12',
                'website_url' => 'https://diamo12.net',
                'message' => 'A fun place for me to hang out on the internet.'
            ]
        ]);
    }
}
