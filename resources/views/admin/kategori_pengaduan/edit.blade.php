@extends('layouts.admin')

@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Mengubah Kategori Pengaduan</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('admin.kategori_pengaduan.update', $kategoriPengaduan->slug) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="first-name-vertical">Nama Kategori</label>
                                    <input type="text" id="first-name-vertical"
                                        class="form-control @error('nama_kategori') is-invalid @enderror"
                                        name="nama_kategori" value="{{ old('nama_kategori', $kategoriPengaduan->nama_kategori) }}"
                                        placeholder="masukan nama kategori">
                                    @error('nama_kategori')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1"
                                        name="deskripsi" value="{{ old('deskripsi', $kategoriPengaduan->deskripsi) }}" rows="4">{{ $kategoriPengaduan->deskripsi }}</textarea>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="{{ route('admin.kategori_pengaduan.index') }}"
                                        class="btn btn-light-secondary me-1 mb-1">Kembali</a>
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
