<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getAllCourses()
    {
        $courses = Course::all();
        return response()->json([
            'status' => 'success',
            'courses' => $courses,
        ]);
    }

    public function getCourse($id)
    {
        $course = Course::find($id);
        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'Course not found',
            ], 404);
        }
        return response()->json([
            'status' => 'success',
            'course' => $course,
        ]);
    }

    public function createCourse(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'instructor_id' => 'required|string',
        ]);
        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'instructor_id' => $request->instructor_id,
        ]);
        return response()->json([
            'status' => 'success',
            'course' => $course,
        ]);
    }
}
