<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{


public function index()
{
    $projects = Project::where('is_upcoming', false)->latest()->paginate(9);
    return view('projects.index', compact('projects'));
}

public function upcoming()
{
    // $projects = Project::where('is_upcoming', true)->latest()->paginate(9);
    // return view('projects.upcoming', compact('projects'));

        $totalUpcoming = Project::where('is_upcoming', true)->count();

    $projects = Project::where('is_upcoming', true)
        ->orderBy('order', 'asc') // order onujayi
        ->take(6) // max 6 ta
        ->get();

    return view('projects.upcoming', compact('projects', 'totalUpcoming'));
}

public function show($slug)
{
    $project = Project::where('slug', $slug)->firstOrFail();
    return view('projects.show', compact('project'));
}
    //
}
