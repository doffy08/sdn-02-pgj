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

    <div class="row gy-4">

        {{-- Card --}}
        <div class="col-lg-6 col-md-6" data-aos="fade-up">
          <div class="card h-100 border-0 shadow-sm overflow-hidden">
            
            <!-- Gambar -->
            <div class="position-relative">
                <img src="{{ asset('assets/img/perpustakaan.jpg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Perpustakaan</h5>
                <p class="card-text text-muted">
                   Perpustakaan berfungsi sebagai pusat informasi, pendidikan, penelitian, pelestarian budaya, dan rekreasi untuk meningkatkan kecerdasan bangsa.
                </p>
            </div>

            

          </div>
        </div>
 {{-- End Card --}}

</main>
@endsection
