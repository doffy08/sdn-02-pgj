<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        return view('dashboard.galeri.index', [
            'galeris' => Galeri::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'     => ['required', 'max:255'],
            'deskripsi' => ['nullable'],
            'image'     => ['required', 'image', 'file', 'max:2048'],
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('galeri-images');
        }

        Galeri::create($validated);

        return redirect('/dashboard/galeri')->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    public function edit(Galeri $galeri)
    {
        return view('dashboard.galeri.edit', [
            'galeri' => $galeri
        ]);
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validated = $request->validate([
            'judul'     => ['required', 'max:255'],
            'deskripsi' => ['nullable'],
            'image'     => ['nullable', 'image', 'file', 'max:2048'],
        ]);

        if ($request->file('image')) {
            if ($galeri->image) {
                Storage::delete($galeri->image);
            }
            $validated['image'] = $request->file('image')->store('galeri-images');
        }

        $galeri->update($validated);

        return redirect('/dashboard/galeri')->with('success', 'Foto galeri berhasil diperbarui!');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->image) {
            Storage::delete($galeri->image);
        }

        $galeri->delete();

        return redirect('/dashboard/galeri')->with('success', 'Foto galeri berhasil dihapus!');
    }
}