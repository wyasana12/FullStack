<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $data['pasien'] = Booking::with('jadwal')->latest()->paginate(10);
        return view('admin.pasien', $data);
    }

    public function show()
    {
        $user = Auth::user();
        $data['booking'] = Booking::where('user_id', $user->id)->get();
        return view('booking', $data);
    }

    public function create()
    {
        $data['jadwal'] = \App\Models\Jadwal::latest()->paginate(10);
        return view('pasien.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'layanan' => 'required|in:umum,kb,kia,persalinan',
            'nama' => 'required|string|max:255',
            'nik' => 'required|digits:16',
            'tanggalLahir' => 'required|date',
            'jenisKelamin' => 'required|in:L,P',
            'phone' => 'required|regex:/^[0-9]{10,15}$/',
            'keluhan' => 'required|string|max:1000',
            'tanggalPesan' => 'required|date|after_or_equal:today',
            'jadwal_id' => 'required|exists:jadwal,jadwal_id',
        ]);

        $user = Auth::user();
        $dataBooking = $request->all();
        $dataBooking['user_id'] = $user->id;
        $jadwal = Jadwal::find($request->jadwal_id);

        if ($jadwal->status == 'tidak tersedia') {
            return back()->with('error', 'Jadwal sudah penuh, silahkan pilih jadwal yang kosong.');
        }

        try {
            Booking::create($dataBooking);
            $jadwal->update(['status' => 'tidak tersedia']);
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }


        return redirect()->route('pasien.confirmation')->with('success', 'Konsultasi berhasil didaftarkan');
    }

    public function edit(Booking $booking)
    {
        $user = Auth::user();
        if ($user->id !== $booking->user_id && $booking->tanggalPesan < now()->toDateString()) {
            return redirect()->route('booking')->with('error', 'Anda sudah tidak memiliki akses untuk mengedit booking ini');
        }

        $data['booking'] = $booking;
        $data['jadwal'] = Jadwal::where('status', 'sedia')->get();
        return view('pasien.edit', $data);
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'layanan' => 'nullable|in:umum,kb,kia,persalinan',
            'nama' => 'nullable|string|max:255',
            'nik' => 'nullable|digits:16',
            'tanggalLahir' => 'nullable|date',
            'jenisKelamin' => 'nullable|in:L,P',
            'phone' => 'nullable|regex:/^[0-9]{10,15}$/',
            'keluhan' => 'nullable|string|max:1000',
            'tanggalPesan' => 'required|date|after_or_equal:today',
            'jadwal_id' => 'nullable|exists:jadwal,jadwal_id',
        ]);

        $user = Auth::user();
        if ($user->id !== $booking->user_id) {
            return redirect()->route('booking')->with('error', 'Anda tidak diizinkan untuk mengedit booking ini.');
        }

        $oldJadwal = Jadwal::find($booking->jadwal_id);  // Get the old jadwal
        $newJadwal = Jadwal::find($request->jadwal_id);  // Get the new jadwal
        // Check if the new jadwal is available
        if ($newJadwal && $newJadwal->status == 'tidak tersedia') {
            return back()->with('error', 'Jadwal tidak tersedia.');
        }

        try {
            // Hanya update field yang ada dalam request
            $booking->fill($request->only([
                'layanan',
                'nama',
                'nik',
                'tanggalLahir',
                'jenisKelamin',
                'phone',
                'keluhan',
                'tanggalPesan',
                'jadwal_id'
            ]))->save();

            if ($oldJadwal) {
                $oldJadwal->update(['status' => 'sedia']);
            }
    
            // If the new jadwal exists, mark it as 'tidak tersedia' (not available)
            if ($newJadwal) {
                $newJadwal->update(['status' => 'tidak tersedia']);
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage());
        }

        return redirect()->route('booking')->with('success', 'Konsultasi berhasil diperbarui.');
    }


    public function destroy(Booking $booking)
    {
        $jadwal = Jadwal::find($booking->jadwal_id);
        $booking->delete();

        if ($jadwal) {
            $jadwal->update(['status' => 'sedia']);
        }

        return redirect()->route('booking')->with('success', 'Pasien Telah Dihapus');
    }
}
