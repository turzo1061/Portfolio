<?php

    namespace App\Http\Controllers;

    use App\Models\Skill;
    use Illuminate\Http\Request;

    class SkillController extends Controller
    {
        public function index()
        {
            $skills = Skill::all();
            return view('skills', compact('skills'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
            Skill::create($request->only('name', 'description'));
            return redirect()->back()->with('success', 'Skill added successfully!');
        }
    }
