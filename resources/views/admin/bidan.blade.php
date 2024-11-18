@extends('panel.layouts.app')
@section('title', 'Bidan Dashboard | PMB Dyah Sumarmo')
@section('content')
    <div class="pagetitle">
        <h1 class="text-5xl font-extrabold text-black">Bidan</h1>
    </div>

    <section class="section dashboard py-6">
        <div class="card max-w-4xl mx-auto bg-white rounded-xl shadow-2xl">
            <div class="card-body p-6 overflow-x-auto">
                <a href="{{ url('admin/bidan/create') }}"
                    class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white py-2 px-4 rounded-lg shadow hover:from-cyan-600 hover:to-blue-700 transition-all duration-200">Add</a>
                <table class="w-full mt-6 bg-white rounded-lg shadow overflow-x-hidden">
                    <thead class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left font-semibold">No</th>
                            <th class="py-3 px-4 text-left font-semibold">Bidan</th>
                            <th class="py-3 px-4 text-left font-semibold">Jam Kerja</th>
                            <th class="py-3 px-4 text-left font-semibold">Status</th>
                            <th class="py-3 px-4 text-left font-semibold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800">
                        @foreach ($bidan as $item)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-4">{{ $loop->iteration }}</td>
                                <td class="py-3 px-4">{{ $item->nama }}</td>
                                <td class="py-3 px-4">{{ $item->jamKerjaMulai }} - {{ $item->jamKerjaSelesai }}</td>
                                <td class="py-3 px-4">{{ $item->status }}</td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <a href="{{ route('admin.bidan.edit', $item) }}"
                                        class="bg-yellow-500 text-white py-2 px-4 rounded-lg shadow hover:bg-yellow-600 transition-all duration-200">Edit</a>
                                    <form action="{{ route('admin.bidan.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus biodata bidan ini?');"
                                        class="inline">
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
                    {!! $bidan->links('pagination::tailwind') !!}
                </div>
            </div>
        </div>
    </section>
@endsection
