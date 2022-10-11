<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Assignment extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'instructor_id',
        'course_id',
    ];
}
