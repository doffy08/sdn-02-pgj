<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
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
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Prestasi::create($validated);

        $request->session()->flash('success', 'Prestasi Berhasil Ditambahkan!');

        return redirect('/dashboard/prestasi');
    }
}
