@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Galeri</h1>
            </div>

            <div class="section-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <a href="{{ route('galeri.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Tambah Foto Galeri
                                    </a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Foto</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th style="min-width: 100px">Aksi</th>
                                        </tr>

                                        @forelse ($galeris as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->image) }}"
                                                        alt="{{ $item->judul }}"
                                                        style="width: 80px; height: 60px; object-fit: cover; border-radius: 4px;">
                                                </td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ Str::limit($item->deskripsi, 60, '...') }}</td>
                                                <td>
                                                    <a href="{{ route('galeri.edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                                                    <form action="{{ route('galeri.delete', $item->id) }}"
                                                        method="POST" class="d-inline delete-form">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger btn-delete" type="button">
                                                            <i class="fas fa-times-circle"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted py-4">
                                                    Belum ada foto galeri. <a href="{{ route('galeri.create') }}">Tambah sekarang</a>.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        {{ $galeris->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection