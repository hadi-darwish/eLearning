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

    public function addSolution(Request $request)
    {
        $user = Auth::user();
        $user->solutions = [
            'assignment_id' => $request->assignment_id,
            'solution' => $request->solution,
        ];
        return response()->json([
            'status' => 'success',
            'message' => 'Solution added',
        ]);
    }
}
