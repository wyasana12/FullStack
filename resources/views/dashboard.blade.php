@extends('mylayout')
@section('title', 'Home | PMB Dyah Sumarmo')
@section('content')
    <main class="w-full">

        <!-- Hero Section -->
        <div class="bg-gray-100">
            <section class="cover bg-blue-teal-gradient relative bg-blue-600 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 overflow-hidden py-48 flex items-center min-h-screen">
                <div class="h-full absolute top-0 right-0 z-0">
                    <img src="{{ url('assets/img/hero.jpg') }}" alt="" class="w-full h-full object-cover opacity-20"/>
                </div>

                <div class="lg:w-3/4 xl:w-2/4 relative z-10 h-100 lg:mt-16">
                    <div>
                        <h1 class="text-white text-xl md:text-2xl xl:text-3xl font-bold leading-tight">
                            Selamat Datang di Website PMB Dyah Sumarmo!
                        </h1>
                        <p class="mt-3 text-white text-xl leading-tight">
                            Solusi Sehat Untuk Ibu dan Anak, Konsultasi Mudah Pelayanan Lengkap Kapan Saja!
                        </p>
                        <a href="/pasien/create" class="px-8 py-4 bg-teal-500 text-white rounded-full inline-block mt-8 font-semibold">
                            Daftar Konsultasi</a
                        >
                    </div>
                </div>
            </section>
        </div>

        <!-- About Us Section -->
        <section id="Tentang-Kami" class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-32">
            <!-- Container untuk gambar di sebelah teks -->
            <div class="flex flex-col lg:flex-row lg:-mx-8">
                <!-- Gambar di sebelah kiri -->
                <div class="w-full lg:w-1/2 lg:px-8">
                    <img src="{{ url('assets/img/about-us.png') }}" alt="" class="w-full h-auto object-cover"/>
                </div>

                <!-- Teks di sebelah kanan, terpusat secara vertikal -->
                <div class="w-full lg:w-1/2 lg:px-8 flex items-center mt-12 lg:mt-0">
                    <div>
                        <h2 class="text-3xl leading-tight font-bold mt-4">
                            Tentang Kami
                        </h2>
                        <p class="text-lg mt-4 font-semibold">
                            Selamat Datang di PMB DYAH SUMARMO
                        </p>
                        <p class="mt-2 leading-relaxed">
                            Kami hadir untuk mendukung kesehatan Anda dengan layanan
                            konsultasi kehamilan, pemeriksaan anak, serta pemesanan tempat
                            persalinan yang mudah dan cepat. Bersama bidan profesional, kami
                            siap membantu perjalanan kehamilan dan persalinan Anda dengan
                            aman dan nyaman.
                        </p>
                        <a href="/pasien/create" class="px-8 py-4 bg-teal-500 text-white rounded-full inline-block mt-8 font-semibold">
                            Daftar Konsultasi</a
                        >
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="Layanan" class="bg-blue-100 py-16">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-bold text-center mb-6 text-black">Layanan Kami</h2>
                <p class="text-lg text-black text-center mb-8">
                    Temukan berbagai layanan unggulan di PMB Dyah Sumarmo yang dirancang khusus untuk Ibu dan Anak. Kami
                    siap melayani Anda dengan sepenuh hati dan profesionalisme, demi kenyamanan dan keamanan Anda.
                </p>
                <div class="grid md:grid-cols-3 gap-8">

                    <!-- Card 1: Kesehatan Ibu dan Anak -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:scale-105 transition duration-300">
                        <img src="{{ url('assets/img/layanan-1.png') }}" alt="Service 1"
                            class="mt-4 w-full h-48 object-contain">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold">Kesehatan Ibu dan Anak</h3>
                            <p class="text-gray-600">KIA (Kesehatan Ibu dan Anak) adalah program kesehatan yang
                                menyediakan layanan pemeriksaan, imunisasi, dan pemantauan
                                tumbuh kembang anak untuk memastikan kesehatan optimal ibu
                                selama masa kehamilan hingga pascapersalinan, serta mendukung
                                pertumbuhan anak secara menyeluruh.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: Keluarga Berencana (KB) -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:scale-105 transition duration-300">
                        <img src="{{ url('assets/img/layanan-2.png') }}" alt="Service 2"
                            class="mt-4 w-full h-48 object-contain">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold">Keluarga Berencana (KB)</h3>
                            <p class="text-gray-600">Keluarga Berencana (KB) adalah program yang bertujuan untuk
                                mengatur jarak dan jumlah anak dengan menggunakan alat
                                kontrasepsi. Program ini dirancang untuk menjaga kesejahteraan
                                keluarga dan kesehatan ibu, sekaligus memastikan anak-anak
                                tumbuh dengan baik.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: Persalinan -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer hover:scale-105 transition duration-300">
                        <img src="{{ url('assets/img/layanan-3.png') }}" alt="Service 3"
                            class="mt-4 w-full h-48 object-contain">
                        <div class="p-4">
                            <h3 class="text-xl font-semibold">Persalinan</h3>
                            <p class="text-gray-600">Layanan persalinan membantu ibu melahirkan dengan aman melalui
                                pendampingan oleh bidan yang terpercaya. Layanan ini juga
                                mencakup perawatan intensif bagi ibu dan bayi setelah
                                persalinan, termasuk pemantauan kondisi kesehatan dan pemberian
                                edukasi bagi ibu dalam merawat bayinya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="/pasien/create" class="px-8 py-4 bg-teal-500 text-white rounded-full inline-block mt-8 font-semibold">
                        Daftar Konsultasi</a
                    >
                </div>
            </div>
        </section>


        <!-- Pengumuman -->
        <section id="Pengumuman" class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-32">
            <div class="">
                <h2 class="text-3xl leading-tight font-bold">Pengumuman</h2>
                <p class="text-gray-600 mt-2 md:max-w-lg">
                    Pellentesque habitant morbi tristique senectus et netus et malesuada
                    fames ac turpis egestas.
                </p>
            </div>

            <a href="{{ route('pengumuman') }}" title="" class="inline-block text-teal-500 font-semibold mt-6 mt:md-0">
                View All Posts</a>

            <div class="md:flex mt-5 md:-mx-4">
                <div class="md:px-4 md:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded border border-gray-300">
                        <div class="p-4">
                            <div class="flex items-center text-sm">
                                <span class="text-teal-500 font-semibold">Tanggal</span>
                                <span class="ml-4 text-gray-600">29 Nov, 2019</span>
                        </div>
                        <p class="text-lg font-semibold leading-tight mt-4">
                            Card Title
                        </p>
                        <p class="text-gray-600 mt-1">
                            This card has supporting text below as a natural lead-in to
                            additional content.
                        </p>
                        <div class="flex items-center mt-4"></div>
                    </div>
                </div>
            </div>

            <div class="md:px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded border border-gray-300">
                    <div class="p-4">
                        <div class="flex items-center text-sm">
                            <span class="text-teal-500 font-semibold">Tanggal</span>
                            <span class="ml-4 text-gray-600">29 Nov, 2019</span>
                        </div>
                        <p class="text-lg font-semibold leading-tight mt-4">
                            Card Title
                        </p>
                        <p class="text-gray-600 mt-1">
                            This card has supporting text below as a natural lead-in to
                            additional content.
                        </p>
                        <div class="flex items-center mt-4"></div>
                    </div>
                </div>
            </div>

            <div class="md:px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded border border-gray-300">
                    <div class="p-4">
                        <div class="flex items-center text-sm">
                            <span class="text-teal-500 font-semibold">Tanggal</span>
                            <span class="ml-4 text-gray-600">29 Nov, 2019</span>
                        </div>
                        <p class="text-lg font-semibold leading-tight mt-4">
                            Card Title
                        </p>
                        <p class="text-gray-600 mt-1">
                            This card has supporting text below as a natural lead-in to
                            additional content.
                        </p>
                        <div class="flex items-center mt-4"></div>
                    </div>
                </div>
            </div>

            <div class="md:px-4 md:w-1/2 xl:w-1/4">
                <div class="bg-white rounded border border-gray-300">
                    <div class="p-4">
                        <div class="flex items-center text-sm">
                            <span class="text-teal-500 font-semibold">Tanggal</span>
                            <span class="ml-4 text-gray-600">29 Nov, 2019</span>
                        </div>
                        <p class="text-lg font-semibold leading-tight mt-4">
                            Card Title
                        </p>
                        <p class="text-gray-600 mt-1">
                            This card has supporting text below as a natural lead-in to
                            additional content.
                        </p>
                        <div class="flex items-center mt-4"></div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <!-- Bidan Section -->
        <section class="bg-blue-100 py-16" >
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-bold text-center mb-6 text-black">Tim Bidan Kami</h2>
                <p class="text-lg text-black text-center mb-8">
                    Kenali tim bidan profesional kami yang siap memberikan pelayanan terbaik untuk Anda
                </p>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white">
                                    <th class="py-4 px-6 text-left font-semibold">No</th>
                                    <th class="py-4 px-6 text-left font-semibold">Nama Bidan</th>
                                    <th class="py-4 px-6 text-left font-semibold">Jam Kerja</th>
                                    <th class="py-4 px-6 text-left font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                                @foreach ($bidan as $item)
                                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition duration-150 ease-in-out">
                                        <td class="py-4 px-6">{{ $loop->iteration }}</td>
                                        <td class="py-4 px-6 font-medium">{{ $item->nama }}</td>
                                        <td class="py-4 px-6">{{ $item->jamKerjaMulai }} - {{ $item->jamKerjaSelesai }}</td>
                                        <td class="py-4 px-6">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium
                                                @if($item->status === 'sedia')
                                                    bg-green-100 text-green-800
                                                @else
                                                    bg-red-100 text-red-800
                                                @endif">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
