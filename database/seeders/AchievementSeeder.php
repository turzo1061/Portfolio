<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    public function run()
    {
        Achievement::create([
            'title' => 'Best Developer Award',
            'description' => 'Received the Best Developer Award at XYZ Hackathon 2024 for innovative project delivery.'
        ]);
        Achievement::create([
            'title' => 'Top 10 Finalist',
            'description' => 'Ranked among the top 10 in the National Coding Olympiad 2023.'
        ]);
        Achievement::create([
            'title' => 'Open Source Contributor',
            'description' => 'Contributed to several open source projects on GitHub, improving community tools and documentation.'
        ]);
    }
}
