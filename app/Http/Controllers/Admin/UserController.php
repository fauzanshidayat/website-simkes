<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10); // ambil user terbaru
        return view('back-end.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back-end.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6',
            'role'     => 'required|in:admin,pengurus',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload foto jika ada
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('users', 'public');
        }

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
            'photo'    => $photoPath,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('back-end.admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('back-end.admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'username' => 'required|string|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:6',
            'role'     => 'required|in:admin,pengurus',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload foto jika ada
        if ($request->hasFile('photo')) {
            // hapus foto lama
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }
            $user->photo = $request->file('photo')->store('users', 'public');
        }

        $user->username = $request->username;
        $user->role = $request->role;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // hapus foto jika ada
        if ($user->photo) {
            Storage::disk('public')->delete($user->photo);
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus');
    }
}
