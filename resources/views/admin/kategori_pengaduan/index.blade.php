@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-light-success color-success" role="alert">
            <i class="bi bi-check-circle"></i>
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-light-danger color-danger" role="alert">
            <i class="bi bi-exclamation-circle"></i>
            {{ session('error') }}
        </div>
    @endif
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4>Kategori Pengaduan</h4>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('admin.kategori_pengaduan.create') }}" class="btn btn-success">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoriPengaduan as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <p class="font-bold mb-0">{{ $item->nama_kategori }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $item->deskripsi }}</p>
                                    </td>
                                    <td class="col-2">
                                        {{-- <a href="{{ route('admin.kategori_pengaduan.edit', $item->slug) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="ubah"><span
                                                class="badge bg-light-warning"><i class="iconly-boldEdit"></i></span></a>
                                        <a href="{{ route('admin.kategori_pengaduan.destroy', $item->id) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="hapus"><span
                                                class="badge bg-light-danger"><i class="iconly-boldDelete"></i></span></a> --}}
                                        <form action="{{ route('admin.kategori_pengaduan.destroy', $item->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <div class="d-flex">
                                                <a href="{{ route('admin.kategori_pengaduan.edit', $item->slug) }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="ubah"
                                                    class="btn btn-outline-warning rounded-pill d-flex justify-content-center align-items-center">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="hapus"
                                                    class="btn btn-outline-danger rounded-pill d-flex justify-content-center align-items-center"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>

                                            {{-- <a class="btn btn-sm btn-outline-danger" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="hapus"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span
                                                    class="badge bg-light-danger"><i
                                                        class="iconly-boldDelete"></i></span></a> --}}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
