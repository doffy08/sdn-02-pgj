@extends('layouts.base')

@section('title', 'Struktur Organisasi | SDN Kebonagung')

@section('content')
    <main id="main" data-aos="fade-in">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <h2>Struktur Organisasi</h2>
            </div>
        </section>

        <section id="struktur-organisasi" class="struktur-organisasi">
            <div class="container" data-aos="fade-up">
                <img src="{{ asset('assets/img/struktur organisasi.jpg') }}" alt="Struktur Organisasi"
                    class="img-fluid rounded shadow w-full" style="object-fit: cover; border: 8px solid #fff;">
            </div>
        </section>
    </main>
@endsection
