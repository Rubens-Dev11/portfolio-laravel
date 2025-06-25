<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create() {
        return view('admin.projects.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'technologies' => 'nullable',
            'image' => 'nullable',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
        ]);

        Project::create($request->all());
        return redirect()->route('admin.projects.index')->with('success', 'Projet ajouté avec succès.');
    }

    public function edit(Project $project) {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'technologies' => 'nullable',
            'image' => 'nullable',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
        ]);

        $project->update($request->all());
        return redirect()->route('admin.projects.index')->with('success', 'Projet mis à jour.');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Projet supprimé.');
    }
}
