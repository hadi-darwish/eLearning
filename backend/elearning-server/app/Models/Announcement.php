<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Announcement extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];
}
