<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Carbon\Carbon;

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

    //     $totalUpcoming = Project::where('is_upcoming', true)->count();

    // $projects = Project::where('is_upcoming', true)
    //     ->orderBy('order', 'asc') // order onujayi
    //     ->take(6) // max 6 ta
    //     ->get();

    // return view('projects.upcoming', compact('projects', 'totalUpcoming'));
    $today = Carbon::today();

    $projects = Project::where('is_upcoming', 1)
        ->whereNotNull('project_date')
        ->whereDate('project_date', '>=', $today)
        ->orderBy('project_date', 'asc')
        ->take(6)
        ->get();

    $totalUpcoming = Project::where('is_upcoming', 1)
        ->whereNotNull('project_date')
        ->whereDate('project_date', '>=', $today)
        ->count();

    return view('projects.upcoming', compact('projects','totalUpcoming'));
}

public function show($slug)
{
    $project = Project::where('slug', $slug)->firstOrFail();
    return view('projects.show', compact('project'));
}
    //
}
