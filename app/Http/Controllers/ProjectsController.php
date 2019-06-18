<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show(project $project)
{
    return view('projects.show', compact('project'));
}

    public function create()
    {
        return view('projects.create');
}

public function store()
{
    project::create(request(['title', 'description']));
        return redirect('/projects');
}

public function edit(project $project) 
{
    return view ('projects.edit', compact('project'));
}

public function update(project $project)
{   
    $project->update(request(['title', 'description']));
    return redirect('/projects');
}
    
public function destroy(project $project)
{
    $project->delete();
    return redirect('/projects');
}
}