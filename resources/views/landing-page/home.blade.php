@extends('layouts.base')
@section('title', 'SDN 02 Pagojengan')

@section('content')
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Sekolah Dasar<br>Negeri 02 Pagojengan</h1>
            <h2>Dukuh Waru, Kel. Pagojengan, Kec. Paguyangan, <br>Kab. Brebes, Jawa Tengah</h2>
            <a href="{{ route('vision') }}" class="btn-get-started">Tentang Sekolah</a>
        </div>
    </section>

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <h2>Sambutan Kepala Sekolah</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Sambutan Section ======= -->
        <section id="sambutan" class="sambutan">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sambutan Kepala Sekolah</h2>
                    <p>Selamat datang di website resmi Sekolah Dasar kami</p>
                </div>

                <div class="row gy-5 align-items-center">

                    <!-- Foto Kepala Sekolah -->
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/Nur Fiatun.jpeg') }}" class="img-fluid rounded-circle shadow"
                                alt="Kepala Sekolah"
                                style="width: 280px; height: 280px; object-fit: cover; border: 8px solid #fff;">


                            <h4 class="mt-4 fw-bold text-dark">Juriyah, S.Pd</h4>
                            <p class="text-muted">Kepala Sekolah SD Negeri 02 Pagojengan</p>
                        </div>
                    </div>

                    <!-- Isi Sambutan -->
                    <div class="col-lg-7">
                        <div class="content ps-lg-4">
                            <div class="quote-icon mb-4">
                                <i class="bx bxs-quote-alt-left" style="font-size: 3.5rem; color: #5fcf80;"></i>
                            </div>

                            <p class="lead text-muted fst-italic mb-4">
                                "Assalamu'alaikum Wr. Wb.<br>
                                Puji syukur kita panjatkan ke hadirat Allah SWT atas segala rahmat dan karunia-Nya sehingga
                                kita semua dapat bertemu dalam keadaan sehat walafiat."
                            </p>

                            <p class="text-muted">
                                Selamat datang di website resmi Sekolah Dasar kami. Website ini hadir sebagai sarana
                                informasi dan komunikasi antara sekolah dengan orang tua/wali murid, masyarakat, dan semua
                                pihak yang peduli dengan pendidikan.
                            </p>

                            <p class="text-muted">
                                Kami berkomitmen untuk memberikan pendidikan yang berkualitas, menciptakan lingkungan
                                belajar yang nyaman, aman, dan menyenangkan bagi seluruh siswa. Dengan dukungan berbagai
                                fasilitas dan tenaga pendidik yang profesional, kami berharap dapat membentuk generasi yang
                                berakhlak mulia, berprestasi, dan siap menghadapi tantangan masa depan.
                            </p>

                            <p class="text-muted">
                                Terima kasih atas kepercayaan Bapak/Ibu kepada sekolah kami. Mari kita bekerja sama untuk
                                mewujudkan pendidikan yang lebih baik.
                            </p>

                            <div class="mt-5">
                                <p class="fw-bold mb-1">Hormat kami,</p>
                                <p class="fw-bold" style="color: #5fcf80;">Juriyah, S.Pd<br>
                                    <span class="text-muted" style="font-size: 0.95rem;">Kepala Sekolah</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Sambutan Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('assets/img/IMG_20260408_114007.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3 class="mb-4">Visi & Misi Sekolah</h3>
                        <h5><b>Visi Sekolah</b></h5>
                        <p class="fst-italic">
                            ”Sekolah dapat membawa generasi mampu menguasai iptek dan imtek”
                        </p>

                        <h5><b>Misi Sekolah</b></h5>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Melaksanakan pembelajaran serta bimbingan secara efektif
                                kepada siswa sesuai potensi masing - masing.</li>
                            <li><i class="bi bi-check-circle"></i> Mendorong pada setiap siswa untuk mengenali potensi
                                dirinya, sehingga dapat di kembangkan secara optimal.</li>
                            <li><i class="bi bi-check-circle"></i> Menumbuhkan semangat penghayatan terhadap ilmu
                                pengetahuan, ajaran agama dan juga budaya bangsa sehingga menjadi sumber kearifan dalam
                                bertindak</li>
                            <li><i class="bi bi-check-circle"></i> Menerapkan manajemen yang transparan dengan melibatkan
                                seluruh warga sekolah dan pihak terkait.</li>
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
                        <span data-purecounter-start="0" data-purecounter-end="171" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Siswa</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tenaga Pengajar</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Kelas</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Popular Courses Section ======= -->
        <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h2>Berita</h2>
                            <p>Berita Terbaru</p>
                        </div>
                        <div class="col-12 col-md-2">
                            <a href="{{ route('news') }}" class="btn btn-success my-2">Lihat Berita Lainnya</a>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>{{ $post->category }}</h4>
                                    </div>

                                    <h3><a href="{{ route('news.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p>{{ $post->excerpt }} ... <a class="text-success" href="">Lihat
                                            Selengkapnya</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Popular Courses Section -->
    </main>
@endsection
