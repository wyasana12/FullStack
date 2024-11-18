<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans';
    protected $fillable = ['gambar','judul', 'deskripsi'];

    public function getPosterUrlAttribute()
    {
        if ($this->gambar) {
            return asset('storage/' . $this->poster);
        }
        return asset('images/default-gambar.png'); // Gambar default jika tidak ada poster
    }
}
