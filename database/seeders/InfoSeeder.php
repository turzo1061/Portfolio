<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Info;

class InfoSeeder extends Seeder
{
    public function run()
    {
        Info::create([
            'title' => 'Contact Email',
            'description' => 'your.email@example.com'
        ]);
        Info::create([
            'title' => 'Location',
            'description' => 'Your City, Country'
        ]);
    }
}
