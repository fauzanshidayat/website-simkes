<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeritaArtikel;

class BeritaArtikelController extends Controller
{
    // Halaman daftar semua berita
    public function index()
    {
        // Ambil semua berita, urutkan terbaru, paginasi
        $berita = BeritaArtikel::latest()->paginate(6);

        return view('front-end.informasi.berita-artikel', compact('berita'));
    }

    // Halaman detail berita
    // Halaman detail berita
    public function show($slug)
    {
        $berita = BeritaArtikel::with('penulis')->where('slug', $slug)->firstOrFail();

        // ambil berita lain, exclude berita ini
        $beritaLain = BeritaArtikel::where('slug', '!=', $slug)
            ->latest()
            ->take(3)
            ->get();

        return view('front-end.informasi.detail-berita-artikel', compact('berita', 'beritaLain'));
    }
}
