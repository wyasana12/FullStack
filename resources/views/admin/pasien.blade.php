@extends('panel.layouts.app')
@section('title', 'Pasien Dashboard | PMB Dyah Sumarmo')
@section('content')
    <div class="pagetitle">
        <h1 class="text-3xl font-bold text-gray-800">Pasien</h1>
    </div>

    <section class="section dashboard py-6">
        <div class="max-w-7xl mx-auto bg-white rounded-xl shadow-2xl p-6">
            <div class="card-body overflow-x-auto">
                <table class="min-w-full table-auto bg-white border border-gray-200 rounded-lg overflow-hidden shadow-lg">
                    <thead class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white">
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Layanan</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">NIK</th>
                            <th class="px-4 py-2">Tanggal Lahir</th>
                            <th class="px-4 py-2">Jenis Kelamin</th>
                            <th class="px-4 py-2">Phone</th>
                            <th class="px-4 py-2">Keluhan</th>
                            <th class="px-4 py-2">Tanggal Pesan</th>
                            <th class="px-4 py-2">Waktu Pesan</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($pasien as $item)
                            <tr class="border-b hover:bg-gray-100 transition duration-200 ease-in-out">
                                <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $item->layanan }}</td>
                                <td class="px-4 py-2">{{ $item->nama }}</td>
                                <td class="px-4 py-2">{{ $item->nik }}</td>
                                <td class="px-4 py-2">{{ $item->tanggalLahir }}</td>
                                <td class="px-4 py-2">{{ $item->jenisKelamin }}</td>
                                <td class="px-4 py-2">{{ $item->phone }}</td>
                                <td class="px-4 py-2">{{ $item->keluhan }}</td>
                                <td class="px-4 py-2">{{ $item->tanggalPesan }}</td>
                                <td class="px-4 py-2">{{ $item->jadwal->time }}</td>
                                <td class="px-4 py-2 text-center">
                                    <form action="{{ route('admin.pasien.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pasien ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition-all duration-200">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-6">
                    {!! $pasien->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </section>
@endsection
