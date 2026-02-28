<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
        protected $fillable = [
        'title',
        'logo',
        'link',
        'order',
        'is_active'
    ];
    //
}
