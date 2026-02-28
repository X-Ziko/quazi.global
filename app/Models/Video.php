<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
        use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'video_type',
        'short_description',
        'details',
        'video_path',
        'thumbnail',
        'video_date'
    ];
    //
}
