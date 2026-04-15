@extends('layouts.base')

@section('title', 'Prestasi | SDN 02 Pagojengan')

@section('content')
    <main id="main" data-aos="fade-in">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <h2>Prestasi</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Fasilitas Section ======= -->
        <section id="fasilitas" class="fasilitas section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Prestasi Sekolah</h2>
                    <p>Berbagai Prestasi unggulan yang berhasil didapatkan oleh Siswa-Siswi SD Negeri 02 Pagojengan.</p>
                </div>

                <div class="row g-4 align-items-stretch">

                    {{-- Card --}}
                    @foreach ($prestasi as $pr)
                        {{-- <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="card border-0 shadow-sm overflow-hidden" style="max-height: 450px">

                                <!-- Gambar -->
                                <div class="position-relative">
                                    <img src="{{ asset('storage/' . $pr->image_prestasi) }}" class="card-img-top img-fluid"
                                        alt="Aman" style="height: 250px; object-fit: cover;">
                                </div>

                                <!-- Body Card -->
                                <div class="card-body text-center p-4">
                                    <h5 class="card-title fw-bold text-dark mb-3">{{ $pr->title }}</h5>
                                    <p class="card-text text-muted">
                                        {{ $pr->excerpt }}
                                    </p>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex" data-aos="fade-up">
                            <div class="card border-0 shadow-sm overflow-hidden w-100 h-100 d-flex flex-column">

                                <!-- Gambar -->
                                <img src="{{ asset('storage/' . $pr->image_prestasi) }}" class="card-img-top"
                                    alt="{{ $pr->title }}" style="height: 250px; object-fit: cover;">

                                <!-- Body -->
                                <div class="card-body text-center p-4 d-flex flex-column">
                                    <h5 class="card-title fw-bold text-dark mb-3">
                                        {{ $pr->title }}
                                    </h5>

                                    <p class="card-text text-muted flex-grow-1 mb-0">
                                        {{ $pr->excerpt }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    {{-- End Card --}}

    </main>
@endsection
