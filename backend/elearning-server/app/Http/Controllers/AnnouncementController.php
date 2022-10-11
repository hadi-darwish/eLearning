<?php

namespace App\Http\Controllers;

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
}
