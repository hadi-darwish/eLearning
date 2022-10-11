<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function getAllAnnouncements()
    {
        $announcements = Announcement::all();
        return response()->json([
            'status' => 'success',
            'announcements' => $announcements,
        ]);
    }

    public function getAnnouncement($id)
    {
        $announcement = Announcement::find($id);
        if (!$announcement) {
            return response()->json([
                'status' => 'error',
                'message' => 'Announcement not found',
            ], 404);
        }
        return response()->json([
            'status' => 'success',
            'announcement' => $announcement,
        ]);
    }

    public function createAnnouncement(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'user_id' => 'required|string',
        ]);
        $announcement = Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);
        return response()->json([
            'status' => 'success',
            'announcement' => $announcement,
        ]);
    }

    public function updateAnnouncement(Request $request, $id)
    {
        $announcement = Announcement::find($id);
        if (!$announcement) {
            return response()->json([
                'status' => 'error',
                'message' => 'Announcement not found',
            ], 404);
        }
        $announcement->update($request->all());
        return response()->json([
            'status' => 'success',
            'announcement' => $announcement,
        ]);
    }

    public function deleteAnnouncement($id)
    {
        $announcement = Announcement::find($id);
        if (!$announcement) {
            return response()->json([
                'status' => 'error',
                'message' => 'Announcement not found',
            ], 404);
        }
        $announcement->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Announcement deleted',
        ]);
    }
}
