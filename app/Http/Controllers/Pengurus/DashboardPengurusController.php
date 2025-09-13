<?php

namespace App\Http\Controllers\Pengurus;

use App\Models\GaleriFoto;
use App\Models\Pengumuman;
use App\Models\GaleriVideo;
use Illuminate\Http\Request;
use App\Models\BeritaArtikel;
use App\Http\Controllers\Controller;

class DashboardPengurusController extends Controller
{
    public function index()
    {
        $jumlahBerita     = BeritaArtikel::count();
        $jumlahPengumuman = Pengumuman::count();
        $jumlahFoto       = GaleriFoto::count();
        $jumlahVideo      = GaleriVideo::count();


        return view('back-end.pengurus.dashboard', compact(
            'jumlahBerita',
            'jumlahPengumuman',
            'jumlahFoto',
            'jumlahVideo'

        ));
    }
}
