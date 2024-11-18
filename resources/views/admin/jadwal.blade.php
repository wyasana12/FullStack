@extends('panel.layouts.app')
@section('title', 'Jadwal Dashboard | PMB Dyah Sumarmo')
@section('content')
    <div class="pagetitle">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Jadwal</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard py-6">
        <div class="card max-w-4xl mx-auto bg-white rounded-xl shadow-2xl">
            <div class="card-body p-6 overflow-x-auto">
                <a href="{{ url('admin/jadwal/create') }}"
                    class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white py-2 px-4 rounded-lg shadow hover:from-cyan-600 hover:to-blue-700 transition-all duration-200">Add</a>

                <table class="w-full mt-6 bg-white rounded-lg shadow overflow-hidden">
                    <thead class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left font-semibold">No</th>
                            <th class="py-3 px-4 text-left font-semibold">Tanggal</th>
                            <th class="py-3 px-4 text-left font-semibold">Waktu</th>
                            <th class="py-3 px-4 text-left font-semibold">Status</th>
                            <th class="py-3 px-4 text-left font-semibold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($jadwal as $item)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-4">{{ $loop->iteration }}</td>
                                <td class="py-3 px-4">{{ $item->date }}</td>
                                <td class="py-3 px-4">{{ $item->time }}</td>
                                <td class="py-3 px-4">{{ $item->status }}</td>
                                <td class="py-3 px-4">
                                    <form action="{{ route('admin.jadwal.destroy', $item->jadwal_id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white py-2 px-4 rounded-lg shadow hover:bg-red-600 transition-all duration-200">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {!! $jadwal->links('pagination::tailwind') !!}
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="max-w-4xl mx-auto mt-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow">
                {{ session('success') }}
            </div>
        @endif
    </section>
@endsection
