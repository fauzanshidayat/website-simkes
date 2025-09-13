<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GaleriFoto;

class GaleriFotoController extends Controller
{
    public function index()
    {
        $galeriFoto = GaleriFoto::latest()->paginate(12); // tampil 12 per halaman
        return view('front-end.galery.foto', compact('galeriFoto'));
    }
}
