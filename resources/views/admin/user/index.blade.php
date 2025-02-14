@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
@endsection

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
                        <h4>Mengelola Akun Petugas</h4>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-success">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <p class="font-bold mb-0">{{ $item->name }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">{{ $item->email }}</p>
                                    </td>
                                    <td class="col-2">
                                        <form action="{{ route('admin.user.destroy', $item->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <div class="d-flex">
                                                <a href="{{ route('admin.user.edit', $item->id) }}" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="ubah"
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

@push('script')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#table');
    </script>
@endpush
