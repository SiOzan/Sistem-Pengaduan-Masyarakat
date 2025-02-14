<?php

use App\Http\Controllers\KategoriPengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', RoleMiddleware::class]], function () {
    Route::get('/dashboard', function () {
        return view('admin.dasboard');
    })->name('admin.dashboard');

    // Route Akun Petugas (User)
    Route::get('manage-user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('manage-user/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('manage-user', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('manage-user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('manage-user/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('manage-user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

    // Route Petugas
    Route::get('petugas', [PetugasController::class, 'index'])->name('admin.petugas.index');
    Route::get('petugas/create', [PetugasController::class, 'create'])->name('admin.petugas.create');
    Route::post('petugas', [PetugasController::class, 'store'])->name('admin.petugas.store');
    Route::get('petugas/edit/{id}', [PetugasController::class, 'edit'])->name('admin.petugas.edit');
    Route::put('petugas/{id}', [PetugasController::class, 'update'])->name('admin.petugas.update');
    Route::delete('petugas/{id}', [PetugasController::class, 'destroy'])->name('admin.petugas.destroy');

    // Route Kategori Pengaduan
    Route::get('kategori-pengaduan', [KategoriPengaduanController::class, 'index'])->name('admin.kategori_pengaduan.index');
    Route::get('kategori-pengaduan/create', [KategoriPengaduanController::class, 'create'])->name('admin.kategori_pengaduan.create');
    Route::post('kategori-pengaduan', [KategoriPengaduanController::class, 'store'])->name('admin.kategori_pengaduan.store');
    Route::get('kategori-pengaduan/edit/{slug}', [KategoriPengaduanController::class, 'edit'])->name('admin.kategori_pengaduan.edit');
    Route::put('kategori-pengaduan/{slug}', [KategoriPengaduanController::class, 'update'])->name('admin.kategori_pengaduan.update');
    Route::delete('kategori-pengaduan/{id}', [KategoriPengaduanController::class, 'destroy'])->name('admin.kategori_pengaduan.destroy');

    // Route Pengaduan
    Route::get('pengaduan', [KategoriPengaduanController::class, 'index'])->name('admin.pengaduan.index');
    Route::get('pengaduan/create', [KategoriPengaduanController::class, 'create'])->name('admin.pengaduan.create');
    Route::post('pengaduan', [KategoriPengaduanController::class, 'store'])->name('admin.pengaduan.store');
    Route::get('pengaduan/edit/{slug}', [KategoriPengaduanController::class, 'edit'])->name('admin.pengaduan.edit');
    Route::put('pengaduan/{slug}', [KategoriPengaduanController::class, 'update'])->name('admin.pengaduan.update');
    Route::delete('pengaduan/{id}', [KategoriPengaduanController::class, 'destroy'])->name('admin.pengaduan.destroy');
});

Route::group(['prefix' => 'petugas', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('petugas.dashboard');
    });
});
