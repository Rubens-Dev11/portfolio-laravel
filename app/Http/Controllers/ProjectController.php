<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    // Affiche tous les projets
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function update(Request $request, Project $project)
{
    $project->update($request->except('_token'));
    return redirect()->route('admin.projects.index')->with('success', 'Projet mis à jour avec succès.');
}


    // Affiche un projet individuel (optionnel)
    public function show(Project $project)
{
    return view('projects.show', compact('project'));
}
    // public function show($id)
    // {
    //     $project = Project::findOrFail($id);
    //     return view('projects.show', compact('project'));
    // }
}
