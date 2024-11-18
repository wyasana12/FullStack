<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidan;

class BidanController extends Controller
{
    public function index()
    {
        $data['bidan'] = \App\Models\Bidan::latest()->paginate(10);
        return view('admin.bidan', $data);
    }

    public function userindex()
    {
        $data['bidan'] = \App\Models\Bidan::latest()->paginate(10);
        return view('dashboard', $data);
    }

    public function create()
    {
        return view('admin.bidan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jamKerjaMulai' => 'required|date_format:H:i',
            'jamKerjaSelesai' => 'required|date_format:H:i',
            'status' => 'required|in:sedia,tidak tersedia'
        ]);

        Bidan::create($request->all());
        return redirect()->route('admin.bidan')->with('success', 'Bidan berhasil dibuat');
    }

    public function edit(Bidan $bidan)
    {
        return view('admin.bidan.edit', compact('bidan'));
    }

    public function update(Bidan $bidan, Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'nullable',
            'jamKerjaSelesai' => 'nullable|date_format:H:i',
            'jamKerjaMulai' => 'nullable|date_format:H:i',
            'status' => 'nullable|in:sedia,tidak tersedia'
        ]);

        $bidan->update(array_filter($validatedData, function($value) {
            return !is_null($value);
        }));
        return redirect()->route('admin.bidan')->with('success', 'Bidan telah terupdate');
    }

    public function destroy(Bidan $bidan)
    {
        $bidan->delete();
        return redirect()->route('admin.bidan')->with('success', 'Bidan berhasil dihapus');
    }
}
