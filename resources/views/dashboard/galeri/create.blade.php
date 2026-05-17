@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Foto Galeri</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="judul" class="form-label">Judul Foto</label>
                                        <input type="text" id="judul"
                                            class="form-control @error('judul') is-invalid @enderror"
                                            name="judul" value="{{ old('judul') }}" placeholder="Contoh: Kegiatan Pramuka 2024">
                                        @error('judul')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi" rows="4"
                                            class="form-control @error('deskripsi') is-invalid @enderror"
                                            placeholder="Deskripsi singkat tentang foto ini...">{{ old('deskripsi') }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="imgInput">Foto <span class="text-danger">*</span></label>
                                        <div class="mb-2">
                                            <img id="imgPreview" src="#" alt="Preview"
                                                style="display:none; max-height: 250px; border-radius: 6px; object-fit: cover;">
                                        </div>
                                        <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                            id="imgInput" name="image" accept="image/*">
                                        <small class="text-muted">Format: JPG, PNG, JPEG. Maks: 2MB.</small>
                                        @error('image')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save"></i> Simpan
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
                imgPreview.style.display = 'block';
                imgPreview.src = URL.createObjectURL(file);
            }
        }
    </script>
@endsection