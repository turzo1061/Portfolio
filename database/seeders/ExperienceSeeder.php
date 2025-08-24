<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        Experience::create([
            'title' => 'Intern Developer - ABC Tech',
            'duration' => 'June 2024 - August 2024',
            'description' => 'Worked on web application development using Laravel and Vue.js. Collaborated with a team to deliver a client project on time.'
        ]);
        Experience::create([
            'title' => 'Freelance Web Designer',
            'duration' => '2023 - Present',
            'description' => 'Designed and developed responsive websites for small businesses and personal portfolios.'
        ]);
    }
}
