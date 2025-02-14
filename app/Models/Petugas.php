<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $fillable = ['foto', 'no_telepon', 'alamat', 'user_id'];
    public $timestamps  = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
