<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function dashboard()
    {
        $skills = \App\Models\Skill::all();
        $projects = \App\Models\Project::all();
        $experiences = \App\Models\Experience::all();
        $achievements = \App\Models\Achievement::all();
        $education = \App\Models\Education::all();
        $infos = \App\Models\Info::all();
        return view('dashboard', compact('skills', 'projects', 'experiences', 'achievements', 'education', 'infos'));
    }
}
