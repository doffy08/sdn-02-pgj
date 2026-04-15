@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Prestasi</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <a href="{{ route('prestasi.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Tambah Prestasi
                                    </a>
                                </div>
                                <div class="card-header-form">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prestasi</th>
                                            <th>Keterangan</th>
                                            <th>Dibuat pada</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($prestasi as $pr)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pr->title }}</td>
                                                <td>{{ $pr->excerpt }}</td>
                                                <td>{{ $pr->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('prestasi.edit', ['prestasi' => $pr->slug]) }}"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                                                    <form action="{{ route('prestasi.delete', ['prestasi' => $pr->id]) }}"
                                                        method="POST" class="d-inline delete-form">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger btn-delete" type="button"
                                                            {{-- onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" --}}>
                                                            <i class="fas fa-times-circle"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        {{-- {{ $posts->links() }} --}}
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
