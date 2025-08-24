<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    public function run()
    {
        Education::create([
            'institution' => 'Srijanee Bidyaniketan',
            'level' => 'School',
            'gpa' => '5.00'
        ]);
        Education::create([
            'institution' => 'Govt Janata College',
            'level' => 'College',
            'gpa' => '5.00'
        ]);
    }
}
