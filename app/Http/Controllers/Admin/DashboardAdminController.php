<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeritaArtikel;
use App\Models\Pengumuman;
use App\Models\GaleriFoto;
use App\Models\GaleriVideo;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $jumlahBerita     = BeritaArtikel::count();
        $jumlahPengumuman = Pengumuman::count();
        $jumlahFoto       = GaleriFoto::count();
        $jumlahVideo      = GaleriVideo::count();
        $jumlahUser       = User::count();

        return view('back-end.admin.dashboard', compact(
            'jumlahBerita',
            'jumlahPengumuman',
            'jumlahFoto',
            'jumlahVideo',
            'jumlahUser'
        ));
    }
}
