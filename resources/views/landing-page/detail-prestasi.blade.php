@extends('layouts.base')

@section('title', $prestasi->title)

@section('content')
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('storage/' . $prestasi->image_prestasi) }}" class="img-fluid shadow rounded"
                        alt="{{ $prestasi->title }}" style="object-fit: cover; height: 400px;" width="100%">
                    <h3>{{ $prestasi->title }}</h3>
                    <p>
                        {!! $prestasi->body !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
