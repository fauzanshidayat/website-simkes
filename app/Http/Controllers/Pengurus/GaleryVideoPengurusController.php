<?php

namespace App\Http\Controllers\Pengurus;

use App\Models\GaleriVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleryVideoPengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = GaleriVideo::latest()->paginate(10);
        return view('back-end.pengurus.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back-end.pengurus.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'link_video' => 'required|url',
        ]);

        GaleriVideo::create([
            'link_video' => $request->link_video,
        ]);

        return redirect()->route('pengurus.video.index')->with('success', 'Video berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $video = GaleriVideo::findOrFail($id);
        return view('back-end.pengurus.video.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $video = GaleriVideo::findOrFail($id);
        return view('back-end.pengurus.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'link_video' => 'required|url',
        ]);

        $video = GaleriVideo::findOrFail($id);
        $video->update([
            'link_video' => $request->link_video,
        ]);

        return redirect()->route('pengurus.video.index')->with('success', 'Video berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = GaleriVideo::findOrFail($id);
        $video->delete();

        return redirect()->route('pengurus.video.index')->with('success', 'Video berhasil dihapus.');
    }
}
