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
}
