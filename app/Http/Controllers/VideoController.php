<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
        public function index()
    {
        $videos = Video::latest()->paginate(9);

        $categories = Video::select('category')
            ->distinct()
            ->pluck('category');

        return view('videos.index', compact('videos', 'categories'));
    }
    //
}
