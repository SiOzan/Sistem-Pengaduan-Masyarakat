@extends('layouts.admin')

@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Mengubah Akun {{ $user->name }}</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('admin.user.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Nama</label>
                                        <input type="text" id="first-name-vertical"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name', $user->name) }}" autocomplete="name"
                                            placeholder="masukan nama petugas">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Email</label>
                                        <input type="email" id="email-id-vertical"
                                            class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}"
                                            placeholder="masukan alamat email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Kata Sandi</label>
                                        <input type="password" id="password-vertical"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="masukan kata sandi">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password-vertical">Konfirmasi Kata Sandi</label>
                                        <input type="password" id="password-vertical"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password_confirmation"
                                            placeholder="masukan kata sandi yang sama kembali">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="disabledInput">Role</label>
                                        <input type="text" class="form-control" id="disabledInput"
                                            placeholder="Petugas" disabled>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <a href="{{ route('admin.user.index') }}"
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
