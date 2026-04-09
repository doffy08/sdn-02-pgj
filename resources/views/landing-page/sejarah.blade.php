@extends('layouts.base')

@section('title', 'Sejarah | SDN Kebonagung')

@section('content')
<main id="main" data-aos="fade-in">
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="{{ url('/') }}">Beranda</a></li>
      <li>Sejarah Sekolah</li>
    </ol>
    <h2>Sejarah Sekolah</h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Sejarah Section ======= -->
<section id="sejarah" class="sejarah">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Sejarah Sekolah</h2>
      <p>Mengenal lebih dekat perjalanan dan perkembangan sekolah kami</p>
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto">
        
        <!-- Gambar Utama (opsional) -->
        <div class="text-center mb-5">
            <img src="{{ asset('assets/img/haldep.jpg' ) }}" 
                 class="img-fluid rounded shadow" 
                 alt="Sejarah Sekolah" 
                 style="max-height: 450px; object-fit: cover;">
        </div>

        <!-- Isi Sejarah -->
        <div class="content">
          <div class="row gy-4">
            
            <!-- Timeline Style (mirip Mentor) -->
            <div class="col-12">
              <div class="timeline-item position-relative pb-4">
                <div class="timeline-marker bg-primary position-absolute"></div>
                <h4 class="fw-bold text-primary">Awal Berdiri</h4>
                <p class="text-muted">Sekolah Dasar kami didirikan pada tahun <strong>1995</strong> dengan nama awal SD Negeri 01 Purwokerto Selatan. Saat itu hanya memiliki 3 ruang kelas dan 45 siswa.</p>
              </div>
            </div>

            <div class="col-12">
              <div class="timeline-item position-relative pb-4">
                <div class="timeline-marker bg-primary position-absolute"></div>
                <h4 class="fw-bold text-primary">Perkembangan</h4>
                <p class="text-muted">Pada tahun 2005, sekolah mengalami renovasi besar-besaran dan penambahan fasilitas. Jumlah siswa meningkat pesat hingga mencapai lebih dari 300 siswa.</p>
              </div>
            </div>

            <div class="col-12">
              <div class="timeline-item position-relative pb-4">
                <div class="timeline-marker bg-primary position-absolute"></div>
                <h4 class="fw-bold text-primary">Saat Ini</h4>
                <p class="text-muted">Sekarang sekolah telah memiliki berbagai fasilitas modern seperti ruang kelas ber-AC, laboratorium komputer, perpustakaan, lapangan olahraga, dan gerbang sekolah yang representatif. Kami terus berkomitmen memberikan pendidikan berkualitas bagi generasi penerus bangsa.</p>
              </div>
            </div>

          </div>

          <!-- Paragraf Panjang -->
          <div class="mt-5">
            <p class="lead text-muted">
              Sejarah panjang sekolah kami tidak terlepas dari peran serta masyarakat, para guru, kepala sekolah, dan pemerintah daerah yang senantiasa mendukung perkembangan pendidikan di wilayah ini. 
              Dari sebuah sekolah kecil dengan fasilitas terbatas, kini kami bangga menjadi salah satu sekolah dasar unggulan di Purwokerto.
            </p>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

</main>
@endsection
