@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ubah Foto Galeri</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('galeri.update', $galeri->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <div class="form-group">
                                        <label for="judul" class="form-label">Judul Foto</label>
                                        <input type="text" id="judul"
                                            class="form-control @error('judul') is-invalid @enderror"
                                            name="judul" value="{{ old('judul', $galeri->judul) }}">
                                        @error('judul')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi" rows="4"
                                            class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="imgInput">Ganti Foto</label>
                                        <div class="mb-2">
                                            <img id="imgPreview"
                                                src="{{ asset('storage/' . $galeri->image) }}"
                                                alt="{{ $galeri->judul }}"
                                                style="max-height: 250px; border-radius: 6px; object-fit: cover; display: block;">
                                        </div>
                                        <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                            id="imgInput" name="image" accept="image/*">
                                        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto. Format: JPG, PNG. Maks: 2MB.</small>
                                        @error('image')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save"></i> Simpan Perubahan
                                        </button>
                                        <a href="{{ route('galeri.index') }}" class="btn btn-secondary ml-2">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                imgPreview.src = URL.createObjectURL(file);
            }
        }
    </script>
@endsection