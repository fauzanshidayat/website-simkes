<?php

namespace App\Http\Controllers\Pengurus;

use App\Models\GaleriFoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GaleryFotoPengurusController extends Controller
{
    public function index()
    {
        $fotos = GaleriFoto::latest()->paginate(10);
        return view('back-end.pengurus.foto.index', compact('fotos'));
    }

    public function create()
    {
        return view('back-end.pengurus.foto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('gambar')->store('foto', 'public');

        GaleriFoto::create([
            'gambar' => $path,
        ]);

        return redirect()->route('pengurus.galeri-foto.index')->with('success', 'Foto berhasil ditambahkan.');
    }

    public function show($id)
    {
        $galeri = GaleriFoto::findOrFail($id);
        return view('back-end.pengurus.foto.show', compact('galeri'));
    }

    public function edit($id)
    {
        $foto = GaleriFoto::findOrFail($id);
        return view('back-end.pengurus.foto.edit', compact('foto'));
    }

    public function update(Request $request, $id)
    {
        $foto = GaleriFoto::findOrFail($id);

        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // hapus foto lama
            if ($foto->gambar && Storage::disk('public')->exists($foto->gambar)) {
                Storage::disk('public')->delete($foto->gambar);
            }
            $path = $request->file('gambar')->store('foto', 'public');
            $foto->gambar = $path;
        }

        $foto->save();

        return redirect()->route('pengurus.galeri-foto.index')->with('success', 'Foto berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $foto = GaleriFoto::findOrFail($id);

        if ($foto->gambar && Storage::disk('public')->exists($foto->gambar)) {
            Storage::disk('public')->delete($foto->gambar);
        }

        $foto->delete();

        return redirect()->route('pengurus.galeri-foto.index')->with('success', 'Foto berhasil dihapus.');
    }
}
