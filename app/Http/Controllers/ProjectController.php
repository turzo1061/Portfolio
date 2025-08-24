<?php

    namespace App\Http\Controllers;

    use App\Models\Project;
    use Illuminate\Http\Request;

    class ProjectController extends Controller
    {
        public function index()
        {
            $projects = Project::all();
            return view('projects', compact('projects'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'url' => 'nullable|url',
            ]);
            Project::create($request->only('title', 'description', 'url'));
            return redirect()->back()->with('success', 'Project added successfully!');
        }
    }
