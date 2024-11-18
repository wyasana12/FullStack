@extends('panel.layouts.app')
@section('title', 'Edit Bidan | PMB Dyah Sumarmo')
@section('content')
    <div class="pagetitle">
        <h1 class="text-3xl font-bold text-gray-800">Bidan</h1>
    </div>

    <section class="section dashboard py-6">
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-2xl">
            <div class="card-body p-6">
                <h5
                    class="text-2xl text-white text-center py-2 px-4 rounded-lg font-semibold bg-gradient-to-r from-cyan-500 to-blue-600 mb-6">
                    Edit Bidan</h5>
                <form action="{{ route('admin.bidan.update', $bidan->id) }}" method="post" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="text-sm font-medium text-gray-700">Nama Bidan</label>
                        <input type="text" name="nama"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 @error('nama') is-invalid @enderror"
                            value="{{ old('nama', $bidan->nama) }}">
                        @error('nama')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="jamKerjaMulai" class="text-sm font-medium text-gray-700">Jam Kerja Mulai</label>
                        <input type="time" name="jamKerjaMulai"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            value="{{ old('jamKerjaMulai', $bidan->jamKerjaMulai) }}">
                    </div>

                    <div class="mb-4">
                        <label for="jamKerjaSelesai" class="text-sm font-medium text-gray-700">Jam Kerja Selesai</label>
                        <input type="time" name="jamKerjaSelesai"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            value="{{ old('jamKerjaSelesai', $bidan->jamKerjaSelesai) }}">
                    </div>

                    <div class="mb-4">
                        <label for="status" class="text-sm font-medium text-gray-700">Status</label>
                        <select name="status"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500">
                            <option value="sedia" {{ $bidan->status == 'sedia' ? 'selected' : '' }}>Sedia</option>
                            <option value="tidak tersedia" {{ $bidan->status == 'tidak tersedia' ? 'selected' : '' }}>Tidak
                                Tersedia</option>
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white py-2 px-6 rounded-lg shadow hover:from-cyan-600 hover:to-blue-700 transition-all duration-200">Submit
                            Form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>
@endsection
