<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StudentController extends Controller
{
    public function getAllCourses()
    {
        $user = Auth::user();
        $courses = $user->courses;
        return response()->json([
            'status' => 'success',
            'courses' => $courses,
        ]);
    }
}
