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
                            <img src="{{ asset('assets/img/Juriyah, S.Pd.png') }}" class="img-fluid rounded-circle shadow"
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
                            ”Unggul Dalam Prestasi, Teruji Dalam Keimanan, Ketaqwaan Dan Berakhlak Mulia”
                        </p>

                        <h5><b>Misi Sekolah</b></h5>
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
         <section id="news" class="news py-5">
            <div class="container" data-aos="fade-up">

                <div class="row g-4">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 50 }}">
                            <div class="card border-0 shadow-sm h-100 w-100 overflow-hidden news-card">
                                
                                <!-- Image -->
                                <div class="position-relative">
                                    <img src="{{ asset('storage/' . $post->image_post) }}" 
                                         class="card-img-top" 
                                         alt="{{ $post->title }}"
                                         style="height: 240px; object-fit: cover;">
                                    
                                    <!-- Category Badge -->
                                    <div class="position-absolute top-0 start-0 m-3">
                                        <span class="badge bg-green fs-6 px-3 py-2 fw-medium">
                                            {{ $post->category }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body d-flex flex-column p-4">
                                    <h5 class="card-title fw-bold mb-3 line-clamp-2">
                                        <a href="{{ route('news.show', $post->slug) }}" 
                                           class="text-dark text-decoration-none hover-text-primary">
                                            {{ $post->title }}
                                        </a>
                                    </h5>
                                    
                                    <p class="card-text text-muted flex-grow-1 line-clamp-3 mb-4">
                                        {{ $post->excerpt }}
                                    </p>

                                    <!-- Footer -->
                                    <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                                        <small class="text-muted">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ $post->created_at->format('d M Y') }}
                                        </small>
                                        <a href="{{ route('news.show', $post->slug) }}" 
                                           class="btn btn-outline-success btn-sm">
                                            Baca Selengkapnya
                                            <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                {{-- @if ($posts->hasPages())
                    <div class="d-flex justify-content-center mt-5">
                        {{ $posts->links('vendor.pagination.bootstrap-5') }}
                    </div>
                @endif --}}
                <div class="container mt-4">
                {{ $posts->links() }}
            </div>

            </div>
        </section>
    </main>
@endsection
