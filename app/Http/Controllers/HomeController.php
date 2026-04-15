<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Staff;
use App\Models\Post;
use App\Models\Prestasi;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing-page.home', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }

    public function news()
    {
        return view('landing-page.news', [
            'posts' => Post::latest()->paginate(9)
        ]);
    }

    public function showNews(Post $post)
    {
        return view('landing-page.show-news', [
            'post' => $post
        ]);
    }

    public function staff()
    {
        return view('landing-page.staff', [
            'leader' => Staff::where('title', 'Kepala Sekolah')->first(),
            'staffs' => Staff::whereNotIn('title', ['Kepala Sekolah'])->get()
        ]);
    }

    public function vision()
    {
        return view('landing-page.vision');
    }


    public function prestasi()
    {
        return view('landing-page.prestasi', [
            'prestasi' => Prestasi::latest()->paginate(9)
        ]);
    }

    public function detail_prestasi(Prestasi $prestasi)
    {
        return view('landing-page.detail-prestasi', [
            'prestasi' => $prestasi
        ]);
    }

    public function fasilitas()
    {
        return view('landing-page.fasilitas');
    }

    public function ekstrakulikuler()
    {
        return view('landing-page.ekstrakulikuler');
    }
    public function galeri()
    {
        return view('landing-page.galeri');
    }

    public function sambutanks()
    {
        return view('landing-page.sambutanks');
    }

    public function sejarah()
    {
        return view('landing-page.sejarah');
    }

    public function struktur_organisasi()
    {
        return view('landing-page.struktur-organisasi');
    }
}
