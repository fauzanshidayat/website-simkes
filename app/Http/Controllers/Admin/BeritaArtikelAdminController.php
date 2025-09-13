<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaArtikelAdminController extends Controller
{
    /**
     * Tampilkan semua berita/artikel
     */
    public function index()
    {
        $data = BeritaArtikel::with('penulis')->latest()->paginate(10);
        return view('back-end.admin.berita-artikel.index', compact('data'));
    }

    /**
     * Form tambah berita
     */
    public function create()
    {
        return view('back-end.admin.berita-artikel.create');
    }

    /**
     * Simpan berita baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('berita', 'public');
        }

        BeritaArtikel::create([
            'gambar' => $gambar,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'penulis_id' => Auth::id(),
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.berita-artikel.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Detail berita
     */
    public function show($id)
    {
        $berita = BeritaArtikel::findOrFail($id);
        return view('back-end.admin.berita-artikel.show', compact('berita'));
    }

    /**
     * Form edit berita
     */
    public function edit($id)
    {
        $berita = BeritaArtikel::findOrFail($id);
        return view('back-end.admin.berita-artikel.edit', compact('berita'));
    }

    /**
     * Update berita
     */
    public function update(Request $request, $id)
    {
        $berita = BeritaArtikel::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            // hapus gambar lama
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $berita->gambar = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $berita->gambar,
        ]);

        return redirect()->route('admin.berita-artikel.index')->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Hapus berita
     */
    public function destroy($id)
    {
        $berita = BeritaArtikel::findOrFail($id);

        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita-artikel.index')->with('success', 'Berita berhasil dihapus');
    }
}
