<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PrestasiController extends Controller
{
    public function index()
    {
        return view('dashboard.prestasi.index', [
            'prestasi' => Prestasi::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'image_prestasi' => ['image', 'file', 'max:1024'],
            'body' => ['required']
        ]);

        if ($request->file('image_prestasi')) {
            $validated['image_prestasi'] = $request->file('image_prestasi')->store('prestasi-images');
        }

        $validated['slug'] = Str::slug($request->title, '-');
        // $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Prestasi::create($validated);

        $request->session()->flash('success', 'Prestasi Berhasil Ditambahkan!');

        return redirect('/dashboard/prestasi');
    }

    public function edit(Prestasi $prestasi)
    {
        return view('dashboard.prestasi.edit', [
            'prestasi' => $prestasi,
        ]);
    }

    public function destroy(Prestasi $prestasi)
    {
        if ($prestasi->image_prestasi) {
            Storage::delete($prestasi->image_prestasi);
        }

        Prestasi::destroy($prestasi->id);

        return redirect('/dashboard/prestasi')->with('success', 'Prestasi berhasil dihapus!');
    }
}
