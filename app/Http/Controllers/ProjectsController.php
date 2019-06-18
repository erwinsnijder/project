<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();

        return view('projects.index', compact('projects'));
    }
    public function create()
    {
        return view('projects.create');
}

public function show(project $project)
{
    return view('projects.show', compact('project'));
}

public function edit(project $project) 
{
    return view ('projects.edit', compact('project'));
}

public function update(project $project)
{
    $project->title = request('title');
    $project->description = request('description');
    $project->save();
    return redirect('/projects');
}

public function store()
{
    $project= new \App\Project;

    $project->title = request('title');
    $project->description = request('description');
    $project->save();
    return redirect('/projects');
}  
    
public function destroy(project $project)
{
    $project->delete();
    return redirect('/projects');
}
}