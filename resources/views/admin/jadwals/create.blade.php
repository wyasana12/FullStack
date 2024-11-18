@extends('panel.layouts.app')
@section('title', 'Add Jadwal | PMB Dyah Sumarmo')
@section('content')
    <div class="pagetitle">
        <h1 class="text-3xl font-bold text-gray-800">Buat Jadwal</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard py-6">
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-2xl">
            <div class="card-body p-6">
                <h5
                    class="text-2xl text-white text-center py-2 px-4 rounded-lg font-semibold bg-gradient-to-r from-cyan-500 to-blue-600 mb-6">
                    Tambah Jadwal</h5>

                @if ($errors->any())
                    <div class="mb-4">
                        <div class="bg-red-100 text-red-700 p-4 rounded-lg">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ url('admin/jadwals') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="mb-4">
                        <label for="tanggal" class="text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" name="tanggal"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="jam_mulai" class="text-sm font-medium text-gray-700">Jam Mulai</label>
                        <input type="time" name="jam_mulai"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="jam_selesai" class="text-sm font-medium text-gray-700">Jam Selesai</label>
                        <input type="time" name="jam_selesai"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white py-2 px-6 rounded-lg shadow hover:from-cyan-600 hover:to-blue-700 transition-all duration-200">Buat
                            Jadwal</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
