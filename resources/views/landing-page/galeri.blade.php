@extends('layouts.base')

@section('title', 'Galeri | SDN 02 Pagojengan')

@section('content')
<main id="main" data-aos="fade-in">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <h2>Galeri</h2>
        </div>
    </section>

    <section id="galeri" class="fasilitas section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Galeri</h2>
                <p>Dokumentasi Aktivitas Kegiatan SDN 02 Pagojengan.</p>
            </div>

            <div class="row gy-4">
                @forelse ($galeris as $item)
                    <div class="col-lg-6 col-md-6" data-aos="fade-up">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">

                            <div class="position-relative">
                                <img src="{{ asset('storage/' . $item->image) }}"
                                     class="card-img-top img-fluid"
                                     alt="{{ $item->judul }}"
                                     style="height: 320px; object-fit: cover;">
                            </div>

                            <div class="card-body text-center p-4">
                                <h5 class="card-title fw-bold text-dark mb-3">{{ $item->judul }}</h5>
                                @if ($item->deskripsi)
                                    <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                                @endif
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Belum ada foto galeri yang tersedia.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

</main>
@endsection