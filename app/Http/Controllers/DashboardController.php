<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Prestasi;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'pengajar' => Staff::count(),
            'artikel' => Post::count(),
            'siswa' => Student::count(),
            'prestasi' => Prestasi::count()
        ]);
    }
}
