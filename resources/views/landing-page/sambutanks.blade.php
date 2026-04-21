@extends('layouts.base')

@section('title', 'Sambutan Kepala Sekolah | SDN 02 Pagojengan')

@section('content')
    <main id="main" data-aos="fade-in">

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
    </main>
@endsection
