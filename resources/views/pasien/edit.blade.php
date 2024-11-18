@extends('mylayout')
@section('title', 'Edit Konsultasi | PMB Dyah Sumarmo')
@section('content')
    <section class="min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-8 items-start">
            <!-- Image Container - Hidden on mobile, shown on md screens and up -->
            <div class="hidden md:block">
                <div class="sticky top-8">
                    <div class="mb-3 bg-white rounded-lg p-5 shadow-lg">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">PMB Dyah Sumarmo</h3>
                        <p class="text-gray-600">Kami menyediakan layanan konsultasi kesehatan berkualitas.</p>
                    </div>
                    <img src="{{ url('assets/img/form-foto.png') }}" alt="Consultation Services"
                        class="rounded-xl shadow-2xl object-contain w-full h-auto bg-white" />
                </div>
            </div>

            <!-- Form Container -->
            <div class="bg-white rounded-xl shadow-2xl p-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800">Form Pembaruan Pendaftaran</h2>
                    <p class="text-gray-600 mt-2">Silakan perbarui data yang diperlukan</p>
                </div>

                <form id="bookingForm" action="{{ route('pasien.update', $booking->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Grid untuk input fields yang bersebelahan -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="layanan" class="block text-sm font-medium text-gray-700">Layanan</label>
                            <select name="layanan"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                                <option value="umum"
                                    {{ old('layanan', $booking->layanan ?? '') == 'umum' ? 'selected' : '' }}>
                                    Umum</option>
                                <option value="kb"
                                    {{ old('layanan', $booking->layanan ?? '') == 'kb' ? 'selected' : '' }}>KB
                                </option>
                                <option value="kia"
                                    {{ old('layanan', $booking->layanan ?? '') == 'kia' ? 'selected' : '' }}>KIA
                                </option>
                                <option value="persalinan"
                                    {{ old('layanan', $booking->layanan ?? '') == 'persalinan' ? 'selected' : '' }}>
                                    Persalinan
                                </option>
                            </select>
                        </div>

                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                                name="nama" value="{{ old('nama', $booking->nama ?? '') }}">
                        </div>

                        <div>
                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="text"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                                name="nik" value="{{ old('nik', $booking->nik ?? '') }}">
                        </div>

                        <div>
                            <label for="tanggalLahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                                name="tanggalLahir" value="{{ old('tanggalLahir', $booking->tanggalLahir ?? '') }}">
                        </div>

                        <div>
                            <label for="jenisKelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select name="jenisKelamin"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                                <option value="L"
                                    {{ old('jenisKelamin', $booking->jenisKelamin ?? '') == 'L' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                                <option value="P"
                                    {{ old('jenisKelamin', $booking->jenisKelamin ?? '') == 'P' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Telepon</label>
                            <input type="text"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                                name="phone" value="{{ old('phone', $booking->phone ?? '') }}">
                        </div>

                        <div>
                            <label for="tanggalPesan" class="block text-sm font-medium text-gray-700">Pilih Tanggal
                                Konsultasi</label>
                            <input type="date"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1 @error('tanggalPesan') is-invalid @enderror"
                                id="tanggalPesan" name="tanggalPesan" min="{{ date('Y-m-d') }}"
                                value="{{ old('tanggalPesan') }}" required>
                        </div>

                        <div>
                            <label for="jadwal_id" class="block text-sm font-medium text-gray-700">Pilih Waktu
                                Konsultasi</label>
                            <select
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                                id="jadwal_id" name="jadwal_id" required>
                                <option value="">Pilih waktu</option>
                                @foreach ($jadwal as $item)
                                    <option value="{{ $item->jadwal_id }}"
                                        {{ old('jadwal_id', $booking->jadwal_id) == $item->jadwal_id ? 'selected' : '' }}>
                                        {{ $item->time }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Keluhan textarea di luar grid -->
                    <div class="mt-6">
                        <label for="keluhan" class="block text-sm font-medium text-gray-700">Keluhan</label>
                        <textarea
                            class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                            name="keluhan" rows="4">{{ old('keluhan', $booking->keluhan ?? '') }}</textarea>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-all duration-200"
                        id="submitBtn">
                        Perbarui Pendaftaran
                    </button>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tanggalPesan = document.getElementById('tanggalPesan');
            const jadwalSelect = document.getElementById('jadwal_id');

            tanggalPesan.addEventListener('change', async function() {
                jadwalSelect.innerHTML = '<option value="">Memuat jadwal...</option>';

                try {
                    const response = await fetch(`/jadwal-available?date=${this.value}`);
                    if (!response.ok) throw new Error('Network response was not ok');
                    const data = await response.json();

                    jadwalSelect.innerHTML = '<option value="">Pilih waktu</option>';
                    data.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.jadwal_id;
                        option.textContent = item.time;
                        jadwalSelect.appendChild(option);
                    });
                } catch (error) {
                    console.error('Error:', error);
                    jadwalSelect.innerHTML = '<option value="">Error loading schedules</option>';
                }
            });
        });
    </script>
@endsection
