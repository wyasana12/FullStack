@extends('panel.layouts.app')
@section('title', 'Add Pengumuman | PMB Dyah Sumarmo')
@section('content')
    <div class="pagetitle">
        <h1 class="text-3xl font-bold text-gray-800">Pengumuman</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard py-6">
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-2xl">
            <div class="card-body p-6">
                <h5
                    class="text-2xl text-white text-center py-2 px-4 rounded-lg font-semibold bg-gradient-to-r from-cyan-500 to-blue-600 mb-6">
                    Tambah Pengumuman</h5>
                <form action="{{ route('admin.pengumumans.store') }}" method="post" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf
                    <div class="mb-4">
                        <label for="gambar" class="text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
                            id="gambar" name="gambar">
                    </div>
                    <div class="mb-4">
                        <label class="text-sm font-medium text-gray-700">Judul</label>
                        <input type="text"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 @error('judul') is-invalid @enderror"
                            name="judul" value="{{ old('judul') }}" required>

                        <!-- error message untuk title -->
                        @error('judul')
                            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 @error('deskripsi') is-invalid @enderror"
                            name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi Film">{{ old('deskripsi') }}</textarea>
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
        // Inisialisasi CKEditor
        CKEDITOR.replace('deskripsi');
    </script>
@endsection
