<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        Skill::create([
            'name' => 'HTML & CSS',
            'description' => 'Responsive layouts, Flexbox, Grid, Modern CSS'
        ]);
        Skill::create([
            'name' => 'JavaScript',
            'description' => 'ES6+, DOM, AJAX, Vue.js basics'
        ]);
        Skill::create([
            'name' => 'PHP & Laravel',
            'description' => 'REST APIs, MVC, Blade, Eloquent ORM'
        ]);
        Skill::create([
            'name' => 'MySQL',
            'description' => 'Database design, queries, migrations'
        ]);
        Skill::create([
            'name' => 'Git & GitHub',
            'description' => 'Version control, collaboration, open source'
        ]);
    }
}
