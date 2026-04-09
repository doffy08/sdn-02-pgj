@extends('layouts.base')

@section('title', 'Ekstrakulikuler | SDN 02 Pagojengan')

@section('content')
<main id="main" data-aos="fade-in">

     <section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <h2>Ekstrakulikuler</h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Fasilitas Section ======= -->
<section id="fasilitas" class="fasilitas section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Ekstrakulikuler Sekolah</h2>
      <p>Berbagai Kegiatan Ekstrakulikuler yang mendukung kegiataan siswa yang positif
      </p>
    </div>

    <div class="row gy-4">

        {{-- Card --}}
        <div class="col-lg-6 col-md-6" data-aos="fade-up">
          <div class="card h-100 border-0 shadow-sm overflow-hidden">
            
            <!-- Gambar -->
            <div class="position-relative">
                <img src="{{ asset('assets/img/Ekstra Pramuka.jpeg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Pramuka</h5>
                <p class="card-text text-muted">
                   Pramuka (Praja Muda Karana) adalah organisasi pendidikan kepanduan nonformal di Indonesia yang bertujuan membentuk karakter, keterampilan, dan kepribadian generasi muda berdasarkan Pancasila.
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
                <img src="{{ asset('assets/img/Senam pagi.jpeg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Senam Pagi</h5>
                <p class="card-text text-muted">
                 Senam pagi adalah aktivitas fisik ringan yang dilakukan pada pagi hari untuk menjaga kebugaran, meningkatkan kesehatan, dan menyegarkan tubuh serta pikiran sebelum beraktivitas.
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
                <img src="{{ asset('assets/img/Karnaval.jpeg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Seni</h5>
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
                <img src="{{ asset('assets/img/outbond.jpeg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Outbond</h5>
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
