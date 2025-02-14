<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriPengaduan extends Model
{
    protected $fillable = ['nama_kategori', 'slug', 'deskripsi'];
    public $timestamps  = true;

    // public function pengaduan()
    // {
    //     return $this->hasMany(Pengaduan::class, 'id_kategori');
    // }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($kategoriPengaduan) {
    //         if ($kategoriPengaduan->pengaduan()->exists()) {
    //             throw new ModelNotFoundException('Kategori pengaduan ini terkait dengan data di tabel Pengaduan Masyarakat dan tidak dapat dihapus.');
    //         }
    //     });
    // }

}
