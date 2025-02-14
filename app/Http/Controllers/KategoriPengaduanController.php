<?php
namespace App\Http\Controllers;

use App\Models\KategoriPengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriPengaduan = KategoriPengaduan::latest()->get();
        return view('admin.kategori_pengaduan.index', compact('kategoriPengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori_pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
            'deskripsi'     => 'required',
        ], [
            'nama_kategori.required' => 'Nama Kategori harus diisi',
            'deskripsi.required'     => 'Deskripsi harus diisi',
        ]);

        $kategoriPengaduan                = new KategoriPengaduan();
        $kategoriPengaduan->nama_kategori = $request->nama_kategori;

        $slug = Str::slug($request->nama_kategori);
        do {
            $randomString = Str::random(5);
            $uniqueSlug   = $slug . '-' . $randomString;
        } while (KategoriPengaduan::where('slug', $uniqueSlug)->exists());
        $kategoriPengaduan->slug = $uniqueSlug;

        $kategoriPengaduan->deskripsi = $request->deskripsi;
        $kategoriPengaduan->save();

        return redirect()->route('admin.kategori_pengaduan.index')->with('success', 'Data Berhasil Dibuat!');
    }

    public function edit($slug)
    {
        $kategoriPengaduan = KategoriPengaduan::where('slug', $slug)->firstOrFail();
        return view('admin.kategori_pengaduan.edit', compact('kategoriPengaduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
            'deskripsi'     => 'required',
        ], [
            'nama_kategori.required' => 'Nama Kategori harus diisi',
            'deskripsi.required'     => 'Deskripsi harus diisi',
        ]);

        $kategoriPengaduan                = KategoriPengaduan::where('slug', $slug)->firstOrFail();
        $kategoriPengaduan->nama_kategori = $request->nama_kategori;

        $slug = Str::slug($request->nama_kategori);
        do {
            $randomString = Str::random(5);
            $uniqueSlug   = $slug . '-' . $randomString;
        } while (KategoriPengaduan::where('slug', $uniqueSlug)->exists());
        $kategoriPengaduan->slug = $uniqueSlug;

        $kategoriPengaduan->deskripsi = $request->deskripsi;
        $kategoriPengaduan->save();

        return redirect()->route('admin.kategori_pengaduan.index')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $kategoriPengaduan = KategoriPengaduan::findOrFail($id);
        $kategoriPengaduan->delete();
        return redirect()->route('admin.kategori_pengaduan.index')->with('success', 'Data berhasil dihapus!');

        // try {
        //     $kategoriPengaduan = KategoriPengaduan::findOrFail($id);
        //     $kategoriPengaduan->delete();
        //     return redirect()->route('admin.kategori_pengaduan.index')
        //         ->with('success', 'Data berhasil dihapus!');
        // } catch (Exception $e) {
        //     return redirect()->route('admin.kategori_pengaduan.index')
        //         ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        // }
    }

}
