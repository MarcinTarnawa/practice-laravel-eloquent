<?php

use App\Models\Project;
use App\Models\Technologie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::with('technologies')->paginate(6);
    $technologies = Technologie::with('projects')->paginate(10);

    return view('welcome', ['projects' => $projects,
                            'technologies' => $technologies]);
});

Route::get('/{id}', function ($id) {
    $project = Project::find($id);
    return view('project', ['project' => $project]);
});