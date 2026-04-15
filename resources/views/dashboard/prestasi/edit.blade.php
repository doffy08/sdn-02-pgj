@extends('layouts.app')

@section('style')
    <style>
        .trix-button-group.trix-button-group--file-tools {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ubah Prestasi</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('prestasi.update', ['prestasi' => $prestasi->slug]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="form-label">Nama Prestasi</label>
                                        <input type="text" id="title"
                                            class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ old('title', $prestasi->title) }}">
                                    </div>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="imgInput">Foto Prestasi</label>
                                        @if ($prestasi->image_prestasi)
                                            <img src="{{ asset('storage/' . $prestasi->image_prestasi) }}"
                                                class="img-fluid mb-3 col-sm-3 d-block" id="imgPreview">
                                        @else
                                            <img class="img-fluid mb-3 col-sm-3" id="imgPreview">
                                        @endif
                                        <input type="file"
                                            class="form-control-file @error('image_prestasi') is-invalid @enderror"
                                            id="imgInput" name="image_prestasi" value="{{ $prestasi->image_prestasi }}">
                                        @error('image_prestasi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Konten</label>
                                        <input id="body" type="hidden" name="body"
                                            value="{{ old('body', $prestasi->body) }}">
                                        <trix-editor input="body"></trix-editor>
                                        @error('body')
                                            <p class="text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan Perubahan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        // trix hidden attach file
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        });

        // image preview
        imgInput.onchange = evt => {
            const [file] = imgInput.files
            imgPreview.style.display = 'block';
            if (file) {
                imgPreview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
