<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{   
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'layanan', 'nama', 'nik', 'tanggalLahir', 'jenisKelamin', 'phone', 'keluhan', 'tanggalPesan', 'jadwal_id', 'user_id'
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
