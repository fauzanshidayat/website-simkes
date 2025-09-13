<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;

class GaleriVideoController extends Controller
{
    public function index()
    {
        $videos = GaleriVideo::latest()->paginate(8); // pagination biar rapi
        return view('front-end.galery.video', compact('videos'));
    }
}
