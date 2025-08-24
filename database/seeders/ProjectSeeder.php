<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'title' => 'Portfolio Website',
            'description' => 'A personal portfolio website built with Laravel and Blade, showcasing my skills and projects.',
            'url' => '#'
        ]);
        Project::create([
            'title' => 'Task Manager App',
            'description' => 'A simple task management application using Laravel and Vue.js for productivity tracking.',
            'url' => '#'
        ]);
        Project::create([
            'title' => 'Blog Platform',
            'description' => 'A multi-user blog platform with authentication, built using Laravel and Bootstrap.',
            'url' => '#'
        ]);
    }
}
