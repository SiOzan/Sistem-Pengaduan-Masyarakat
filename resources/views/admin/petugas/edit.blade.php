@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/choices.js/choices.min.css') }}" />
@endsection

@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Mengubah Data Petugas {{ $petugas->user->name }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('admin.petugas.update', $petugas->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label><b>Akun Petugas</b> <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <select class="choices form-select @error('user_id') is-invalid @enderror"
                                            name="user_id">
                                            <option value="">Cari akun petugas...</option>
                                            @foreach ($akunPetugas as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $petugas->user_id ? 'selected' : '' }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label><b>Nama Petugas</b> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                            id="readonlyInput" name="nama" readonly="readonly"
                                            value="Auto select name petugas sesuai akun :P">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label><b>No Telepon</b> <span class="text-danger">*</span></label>
                                        <input type="tel" id="contact-info-vertical"
                                            class="form-control  @error('no_telepon') is-invalid @enderror"
                                            name="no_telepon" value="{{ old('no_telepon', $petugas->no_telepon) }}">
                                        @error('no_telepon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="input-group mb-3">
                                        <label><b>Foto Petugas</b> <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                                id="inputGroupFile01" name="foto" value="{{ $petugas->foto }}"
                                                accept="image/png, image/jpg">
                                        </div>
                                        @error('foto')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label"><b>Alamat</b> <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlTextarea1" name="alamat"
                                        value="{{ old('alamat') }}" rows="4">{{ $petugas->alamat }}</textarea>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                    <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                        value="KABUPATEN BANDUNG">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="text" id="helperText" class="form-control" placeholder="KECAMATAN"
                                        style="text-transform:uppercase;">
                                </div> --}}
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <a href="{{ route('admin.petugas.index') }}"
                                    class="btn btn-light-secondary me-1 mb-1">Kembali</a>
                                <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('backend/assets/vendors/choices.js/choices.min.js') }}"></script>
@endpush
