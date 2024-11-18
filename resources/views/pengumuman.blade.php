@extends('mylayout')
@section('title', 'Pengumuman | PMB Dyah Sumarmo')
@section('content')
    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 py-6 px-6 sm:py-16 sm:px-8">
        <div class="container mx-auto pt-40">
            <h1
                class="text-4xl font-extrabold text-center mb-16 text-white bg-gradient-to-r from-blue-600 to-cyan-500 p-6 rounded-xl">
                Daftar Pengumuman
            </h1>
            @if ($pengumuman->isEmpty())
                <div class="alert alert-warning p-6 mb-8 text-center bg-yellow-100 border-l-4 border-yellow-500">
                    Tidak ada pengumuman yang tersedia.
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($pengumuman as $item)
                        <div class="card border rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow">
                            <div class="card-header p-4 bg-gradient-to-r from-blue-600 to-cyan-500 text-white rounded-t-lg">
                                <h5 class="text-lg font-semibold">{{ $item->judul }}</h5>
                                <small>{{ $item->created_at->format('Y M d, H:i') }}</small>
                            </div>
                            <div class="card-body p-4">
                                @if ($item->gambar)
                                    <img src="{{ asset('storage/' . $item->gambar) }}"
                                        class="w-full h-48 object-cover rounded-lg mb-4" alt="Gambar Pengumuman">
                                @endif
                                <p class="mb-4">{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-8 text-center">
                    {{ $pengumuman->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
