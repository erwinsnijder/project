<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\project::all();

        return view('projects.index', compact('projects'));
    }

public function create()

{
return view('projects.create');
}

public function store()

{

    $project = new project();

    $project->title = request('title');
    $project->description = request('description');

    $project->save();

    return redirect('/projects');
    }
}