<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function createAssignment(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'course_id' => 'required|string',
            'instructor_id' => 'required|string',
        ]);
        $assignment = Assignment::create([
            'title' => $request->title,
            'description' => $request->description,
            'course_id' => $request->course_id,
            'instructor_id' => $request->instructor_id,
        ]);
        return response()->json([
            'status' => 'success',
            'assignment' => $assignment,
        ]);
    }

    public function updateAssignment(Request $request, $id)
    {
        $assignment = Assignment::find($id);
        if (!$assignment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Assignment not found',
            ], 404);
        }
        $assignment->fill($request->all())->save();
        return response()->json([
            'status' => 'success',
            'assignment' => $assignment,
        ]);
    }
}
