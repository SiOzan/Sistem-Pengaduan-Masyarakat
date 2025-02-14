<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    public function kategoriFasilitas()
    {
        return $this->belongsTo(KategoriFasilitas::class, 'id_kategori');
    }
}
