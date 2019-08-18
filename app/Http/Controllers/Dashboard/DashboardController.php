<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $services = Service::all()->count();
        $messages = Message::all()->count();
        $videos = Gallery::where('video_url', '!=', null)->count();
        $images = Gallery::where('video_url', '=', null)->count();
        return view('dashboard.welcome', compact('services', 'messages', 'videos', 'images'));
    }
}
