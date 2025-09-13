<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(6);
        return view('front-end.informasi.pengumuman', compact('pengumuman'));
    }

    public function show($slug)
    {
        $pengumuman = Pengumuman::with('penulis')->where('slug', $slug)->firstOrFail();

        $pengumumanLain = Pengumuman::where('slug', '!=', $slug)
            ->latest()
            ->take(3)
            ->get();

        return view('front-end.informasi.detail-pengumuman', compact('pengumuman', 'pengumumanLain'));
    }
}
