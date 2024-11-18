<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    public function index()
    {
        $data['pengumuman'] = \App\Models\Pengumuman::latest()->paginate(10);
        return view('admin.pengumuman', $data);
    }
    public function show()
    {
        $data['pengumuman'] = \App\Models\Pengumuman::latest()->paginate(10);
        return view('pengumuman', $data);
    }
    public function create()
    {
        return view('admin.pengumumans.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Pengumuman::create($validatedData);
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil dibuat');
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumumans.edit', compact('pengumuman'));
    }

    public function update(Pengumuman $pengumuman, Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->hasFile('gambar')) {
            if($pengumuman->gambar) {
                Storage::delete('public/'. $pengumuman->gambar);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }
        $pengumuman->update($validatedData);

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil terupdate');
    }

    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->gambar) {
            Storage::delete('public/' . $pengumuman->gambar);
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman Telah Dihapus');
    }
}
