@extends('layouts.base')

@section('title', 'Fasilitas | SDN 02 Pagojengan')

@section('content')
<main id="main" data-aos="fade-in">

    <section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <h2>Fasilitas Sekolah</h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Fasilitas Section ======= -->
<section id="fasilitas" class="fasilitas section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Fasilitas Sekolah</h2>
      <p>Berbagai fasilitas unggulan yang mendukung proses belajar mengajar siswa kami</p>
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

 {{-- Card --}}
        <div class="col-lg-6 col-md-6" data-aos="fade-up">
          <div class="card h-100 border-0 shadow-sm overflow-hidden">
            
            <!-- Gambar -->
            <div class="position-relative">
                <img src="{{ asset('assets/img/uks.jpg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">UKS</h5>
                <p class="card-text text-muted">
                  Selain menjadi UKS Ruangan ini juga digunakan untuk kegiatan Belajar Mengajar kelas 6
                </p>
            </div>

          </div>
        </div>
 {{-- End Card --}}
 {{-- Card --}}
        <div class="col-lg-6 col-md-6" data-aos="fade-up">
          <div class="card h-100 border-0 shadow-sm overflow-hidden">
            
            <!-- Gambar -->
            <div class="position-relative">
                <img src="{{ asset('assets/img/ruang tunggu tamu.jpg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Ruang Tunggu Tamu</h5>
                <p class="card-text text-muted">
                  
                </p>
            </div>

          </div>
        </div>
 {{-- End Card --}}
 {{-- Card --}}
        <div class="col-lg-6 col-md-6" data-aos="fade-up">
          <div class="card h-100 border-0 shadow-sm overflow-hidden">
            
            <!-- Gambar -->
            <div class="position-relative">
                <img src="{{ asset('assets/img/uks.jpg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">UKS</h5>
                <p class="card-text text-muted">
                  Selain menjadi UKS Ruangan ini juga digunakan untuk kegiatan Belajar Mengajar kelas 6
                </p>
            </div>

          </div>
        </div>
 {{-- End Card --}}
    </div>

  </div>
</section><

</main>
@endsection
