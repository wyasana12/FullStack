@extends('mylayout')
@section('title', 'Detail Booking | PMB Dyah Sumarmo')
@section('content')
    <section class="min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600 py-12 px-4 sm:px-6 lg:px-8 pt-56">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-2xl p-8">
            <!-- Judul -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Detail Booking</h1>
                <p class="text-gray-600 mt-2">Daftar reservasi konsultasi Anda</p>
            </div>

            <!-- Daftar Booking -->
            <div class="space-y-6">
                @foreach ($booking as $item)
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm border border-gray-200">
                        <!-- Informasi Booking -->
                        <div class="mb-4">
                            <h3 class="font-semibold text-lg text-gray-800">{{ $item->nama }}</h3>
                            <div class="mt-2 text-gray-600">
                                <p class="flex items-center gap-2">
                                    <span class="font-medium">Layanan:</span> {{ $item->layanan }}
                                </p>
                                <p class="flex items-center gap-2">
                                    <span class="font-medium">Tanggal:</span> {{ $item->tanggalPesan }}
                                </p>
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex items-center gap-4 mt-4">
                            <a href="{{ route('pasien.edit', $item) }}"
                                class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg shadow-sm transition-all duration-200">
                                Edit
                            </a>
                            <form action="{{ route('pasien.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus biodata bidan ini?');"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg shadow-sm transition-all duration-200">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
