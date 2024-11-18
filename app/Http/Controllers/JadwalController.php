<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $data['jadwal'] = \App\Models\Jadwal::latest()->paginate(10);
        return view('admin.jadwal', $data);
    }
    public function create()
    {
        return view('admin.jadwals.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        $tanggal = new \DateTime($request->input('tanggal'));
        $jam_mulai = new \DateTime($request->input('jam_mulai'));
        $jam_selesai = new \DateTime($request->input('jam_selesai'));
        $interval = new \DateInterval('PT30M');
        $period = new \DatePeriod($jam_mulai, $interval, $jam_selesai->modify('+1 second'));

        foreach ($period as $time) {
            Jadwal::create([
                'time' => $time->format('H:i'),
                'date' => $tanggal->format('Y-m-d'),
                'status' => 'sedia',
            ]);
        }

        return redirect()->route('admin.jadwal')->with('success', 'Jadwal berhasil dibuat');
    }

    public function available(Request $request)
    {
        $tanggal = $request->query('date');

        $jadwal = Jadwal::where('date', $tanggal)
            ->where('status', 'sedia')
            ->get(['jadwal_id', 'time', 'status']);

        return response()->json($jadwal);
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('admin.jadwal')->with('success', 'Jadwal berhasil dihapus');
    }
}
