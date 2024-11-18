<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{   
    use HasFactory;
    protected $table = 'jadwal';
    protected $primaryKey = 'jadwal_id';
    protected $fillable = [
        'time', 'status', 'date'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
