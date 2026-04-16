@extends('layouts.base')

@section('title', 'Berita | SDN 02 Pagojengan')

@section('content')
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs py-4 bg-light">
            <div class="container">
                <h2 class="mb-0 fw-bold text-dark">Semua Berita</h2>
                {{-- <p class="text-muted mb-0">Lihat seluruh berita terbaru dari SDN 02 Pagojengan</p> --}}
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= News Section ======= -->
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