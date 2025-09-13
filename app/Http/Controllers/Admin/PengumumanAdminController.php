<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengumumanAdminController extends Controller
{
    /**
     * Tampilkan semua pengumuman
     */
    public function index()
    {
        $data = Pengumuman::with('penulis')->latest()->paginate(10);
        return view('back-end.admin.pengumuman.index', compact('data'));
    }

    /**
     * Form tambah pengumuman
     */
    public function create()
    {
        return view('back-end.admin.pengumuman.create');
    }

    /**
     * Simpan pengumuman baru
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
            $gambar = $request->file('gambar')->store('pengumuman', 'public');
        }

        Pengumuman::create([
            'gambar' => $gambar,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'penulis_id' => Auth::id(),
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    /**
     * Detail pengumuman
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('back-end.admin.pengumuman.show', compact('pengumuman'));
    }

    /**
     * Form edit pengumuman
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('back-end.admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update pengumuman
     */
    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            // hapus gambar lama
            if ($pengumuman->gambar && Storage::disk('public')->exists($pengumuman->gambar)) {
                Storage::disk('public')->delete($pengumuman->gambar);
            }
            $pengumuman->gambar = $request->file('gambar')->store('pengumuman', 'public');
        }

        $pengumuman->update([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $pengumuman->gambar,
        ]);

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui');
    }

    /**
     * Hapus pengumuman
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if ($pengumuman->gambar && Storage::disk('public')->exists($pengumuman->gambar)) {
            Storage::disk('public')->delete($pengumuman->gambar);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus');
    }
}
