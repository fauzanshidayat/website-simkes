<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeritaArtikel;
use App\Models\Pengumuman;
use App\Models\GaleriFoto;
use App\Models\GaleriVideo;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 berita terbaru
        $beritaTerbaru = BeritaArtikel::latest()->take(3)->get();

        // Ambil 3 pengumuman terbaru
        $pengumumanTerbaru = Pengumuman::latest()->take(3)->get();

        // Ambil 8 foto galeri terbaru
        $galeriFoto = GaleriFoto::latest()->take(8)->get();

        // Ambil 4 video terbaru
        $galeriVideo = GaleriVideo::latest()->take(4)->get();

        return view('front-end.home', compact('beritaTerbaru', 'pengumumanTerbaru', 'galeriFoto', 'galeriVideo'));
    }
}
