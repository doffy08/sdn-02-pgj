@extends('layouts.base')

@section('title', 'Tentang | SDN 02 Pagojengan')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>VISI SEKOLAH</h2>
            <h5>”Unggul Dalam Prestasi, Teruji Dalam Keimanan, Ketaqwaan Dan Berakhlak Mulia”</h5>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/visi dan misi.JPG" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>MISI SEKOLAH</h3>
                <ul>
                <li><i class="bi bi-check-circle"></i> Menanamkan Pendidikan Dasar Agama Islam Yang Yakin Dan Mantap.</li>
                <li><i class="bi bi-check-circle"></i> Membiasakan Berperilaku Yang Baik Dan Berakhlak Mulia.</li>
                <li><i class="bi bi-check-circle"></i> Meningkatkan Mutu Pendidikan Sesuai Dengan Tuntutan Masyarakat Dan Perkembangan Ilmu Pengetahuan Dan Teknologi (IPTEK).</li>
                <li><i class="bi bi-check-circle"></i> Mengembangkan Kemampuan Berpikir Logis, Kritis, Dan Kreatif.</li>
                <li><i class="bi bi-check-circle"></i> Menumbuhkan Sikap Toleran, Tanggung Jawab, Kemandirian Dan Percakapan Emosional.</li>
                <li><i class="bi bi-check-circle"></i> Membentuk Rasa Cinta Kepada Bangsa Dan Tanah Air Indonesia.</li>
                </ul>


            </div>
            </div>

        </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="171" data-purecounter-duration="1" class="purecounter"></span>
                <p>Siswa</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Tenaga Pengajar</p>
            </div>

            <div class="col-lg-4 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                <p>Kelas</p>
            </div>

            </div>

        </div>
    </section><!-- End Counts Section -->
</main>
@endsection