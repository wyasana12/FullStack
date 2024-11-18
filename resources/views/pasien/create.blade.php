@extends('mylayout')
@section('title', 'Daftar Konsultasi | PMB Dyah Sumarmo')
@section('content')
    <section class="min-h-screen bg-gradient-to-br from-cyan-500 to-blue-600 py-12 px-4 sm:px-6 lg:px-8 pt-52">
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
                <!-- Judul Form -->
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800">Form Pendaftaran Konsultasi</h2>
                    <p class="text-gray-600 mt-2">Silakan isi data diri Anda dengan lengkap</p>
                </div>

                <form id="bookingForm" action="{{ route('pasien.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Grid untuk input fields yang bersebelahan -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="layanan" class="block text-sm font-medium text-gray-700">Pilih Layanan</label>
                            <select name="layanan" required
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                                <option value="umum">Layanan Umum</option>
                                <option value="kb">Layanan KB</option>
                                <option value="kia">Layanan KIA</option>
                                <option value="persalinan">Layanan Persalinan</option>
                            </select>
                        </div>

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" placeholder="Nama" required
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                        </div>

                        <div>
                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                            <input type="text" name="nik" placeholder="NIK" required
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                        </div>

                        <div>
                            <label for="birthdate" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                            <input type="date" name="tanggalLahir" required
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                        </div>

                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                            <select name="jenisKelamin" required
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                            <input type="text" name="phone" placeholder="No. Telepon" required
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1">
                        </div>

                        <div>
                            <label for="tanggalPesan" class="block text-sm font-medium text-gray-700">Pilih Tanggal Konsultasi</label>
                            <input type="date"
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                                id="tanggalPesan" name="tanggalPesan" min="{{ date('Y-m-d') }}"
                                value="{{ old('tanggalPesan') }}" required>
                        </div>

                        <div>
                            <label for="jadwal_id" class="block text-sm font-medium text-gray-700">Pilih Waktu Konsultasi</label>
                            <select
                                class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"
                                id="jadwal_id" name="jadwal_id" required>
                                <option value="">Pilih waktu</option>
                            </select>
                        </div>
                    </div>

                    <!-- Keluhan textarea di luar grid, menggunakan full width -->
                    <div class="mt-6">
                        <label for="complaint" class="block text-sm font-medium text-gray-700">Keluhan</label>
                        <textarea name="keluhan" placeholder="Keluhan Anda" required rows="4"
                            class="appearance-none block w-full px-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 mt-1"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-all duration-200">
                        Daftar Konsultasi
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
