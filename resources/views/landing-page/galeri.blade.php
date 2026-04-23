@extends('layouts.base')

@section('title', 'galeri | SDN 02 Pagojengan')

@section('content')
<main id="main" data-aos="fade-in">

  <main id="main" data-aos="fade-in">

    <section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <h2>Galeri</h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Fasilitas Section ======= -->
<section id="fasilitas" class="fasilitas section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Galeri</h2>
      <p>Dokumentasi Aktivitas Kegiatan SDN 02 Pagojengan. </p>
    </div>

    <div class="row gy-4">

        {{-- Card --}}
        <div class="col-lg-6 col-md-6" data-aos="fade-up">
          <div class="card h-100 border-0 shadow-sm overflow-hidden">
            
            <!-- Gambar -->
            <div class="position-relative">
                <img src="{{ asset('assets/img/hallal bi hallal-2.jpeg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Hallal bi Hallal </h5>
                <p class="card-text text-muted">
                   Pada hari pertama tepatnya pada tanggal 30 Maret Para Siswa dan Guru mengadakan acara Hallal bi Hallal.
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
                <img src="{{ asset('assets/img/Pramuka.jpeg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Pelantikan & Pengukuhan Golongan Siaga dan Penggalang</h5>
                <p class="card-text text-muted">
                  Pengukuhan atau pelantikan Siaga dan Penggalang adalah upacara formal kenaikan tingkat atau perpindahan golongan (misal: Siaga ke Penggalang) yang menandai peningkatan kecakapan, tanggung jawab, dan kode kehormatan (Dwi Satya/Darma ke Tri Satya/Dasa Darma). Prosesi ini wajib dilakukan secara khidmat, diikuti penandatanganan buku SKU, dan seringkali melibatkan orang tua sebagai tanda dukungan.
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
                <img src="{{ asset('assets/img/hallal bi hallal-2.jpeg') }}" 
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

</main>
@endsection
