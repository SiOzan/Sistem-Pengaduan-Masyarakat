<?php
namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::latest()->get();
        $user    = User::all();

        return view('admin.petugas.index', compact('petugas', 'user'));
    }

    public function create()
    {
        $akunPetugas = User::where('role', 'Petugas')->orderBy('name', 'asc')->get();
        $petugas     = Petugas::all();

        return view('admin.petugas.create', compact('akunPetugas', 'petugas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto'       => 'required|image|mimes:png,jpg,PNG,JPG|max:2048',
            'no_telepon' => 'required',
            'alamat'     => 'required',
            'user_id'    => 'required',
        ], [
            'foto.required'       => 'Foto harus diisi',
            'foto.mimes'          => 'Format gambar harus .png / .jpg',
            'foto.max'            => 'Ukuran gambar tidak boleh lebih dari 2MB',
            'no_telepon.required' => 'Nomor telepon harus disi',
            'alamat.required'     => 'Alamat harus diisi',
            'user_id.required'    => 'Akun Petugas belum dipilih',
        ]);

        $path = $request->file('foto')->store('petugas', 'public');

        $petugas             = new Petugas();
        $petugas->foto       = $path;
        $petugas->no_telepon = $request->no_telepon;
        $petugas->alamat     = $request->alamat;
        $petugas->user_id    = $request->user_id;
        $petugas->save();

        return redirect()->route('admin.petugas.index')->with('success', 'Data petugas berhasil dibuat');
    }

    public function show(Petugas $petugas)
    {
        //
    }

    public function edit($id)
    {
        $petugas     = Petugas::findOrFail($id);
        $akunPetugas = User::where('role', 'Petugas')->orderBy('name', 'asc')->get();

        return view('admin.petugas.edit', compact('petugas', 'akunPetugas'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'foto'       => 'image|mimes:png,jpg,PNG,JPG|max:2048',
            'no_telepon' => 'required',
            'alamat'     => 'required',
            'user_id'    => 'required',
        ], [
            'foto.mimes'          => 'Format gambar harus .png / .jpg',
            'foto.max'            => 'Ukuran gambar tidak boleh lebih dari 2MB',
            'no_telepon.required' => 'Nomor telepon harus disi',
            'alamat.required'     => 'Alamat harus diisi',
            'user_id.required'    => 'Akun Petugas belum dipilih',
        ]);

        $petugas = Petugas::findOrFail($id);
        if ($request->hasFile('foto')) {
            if ($petugas->foto && Storage::disk('public')->exists($petugas->foto)) {
                Storage::disk('public')->delete($petugas->foto);
            }

            $path          = $request->file('foto')->store('petugas', 'public');
            $petugas->foto = $path;
        }
        $petugas->no_telepon = $request->no_telepon;
        $petugas->alamat     = $request->alamat;
        $petugas->user_id    = $request->user_id;
        $petugas->save();

        return redirect()->route('admin.petugas.index')->with('success', 'Data petugas berhasil diubah');

    }

    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        if ($petugas->foto && Storage::disk('public')->exists($petugas->foto)) {
            Storage::disk('public')->delete($petugas->foto);
        }
        $petugas->delete();

        return redirect()->route('admin.petugas.index')->with('success', 'data berhasil dihapus!');

    }
}
