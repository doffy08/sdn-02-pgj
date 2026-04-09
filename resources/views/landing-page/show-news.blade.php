@extends('layouts.base')

@section('title', $post->title)

@section('content')
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('storage/' . $post->image_post) }}" class="img-fluid shadow rounded" alt=""
                        style="object-fit: cover; height: 400px;" width="100%">
                    <h3>{{ $post->title }}</h3>
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
