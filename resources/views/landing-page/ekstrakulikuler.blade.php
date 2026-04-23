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
                <img src="{{ asset('assets/img/seni tari-3.jpeg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Seni Tari</h5>
                <p class="card-text text-muted">
                 Seni tari adalah cabang seni yang menggunakan gerakan tubuh manusia yang ritmis, indah, dan simbolis sebagai media ekspresi jiwa, perasaan, pikiran, atau cerita. Tari memadukan unsur raga (gerak), irama (musik/iringan), dan rasa (penjiwaan) untuk menciptakan daya pesona dan makna mendalam.
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
                <img src="{{ asset('assets/img/nyanyi.jpg') }}" 
                     class="card-img-top img-fluid" 
                     alt="Aman"
                     style="height: 320px; object-fit: cover;">
            </div>

            <!-- Body Card -->
            <div class="card-body text-center p-4">
              <h5 class="card-title fw-bold text-dark mb-3">Menyanyi</h5>
                <p class="card-text text-muted">
                  Ekstrakurikuler menyanyi (vokal/paduan suara) adalah kegiatan sekolah untuk mengembangkan bakat seni suara, teknik vokal, pernapasan, dan intonasi, serta meningkatkan rasa percaya diri. Aktivitas ini meliputi latihan menyanyi solo, vokal grup, hingga paduan suara, serta seringkali mencakup pengenalan lagu nasional dan daerah.
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
