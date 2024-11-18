<nav class="bg-white shadow sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center p-6">
            <a class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent"
                href="#">
                PMB Dyah Sumarmo
            </a>
            <button id="menu-btn" class="block md:hidden text-gray-900 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div id="menu" class="hidden md:flex space-x-4">
                <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="{{ route('dashboard') }}">Beranda</a></li>
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="\pasien\create">Daftar Konsultasi</a></li>
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="{{ route('booking') }}">Detail Booking</a></li>
                    <li><a class="text-gray-900 hover:text-cyan-600 transition ease-in-out duration-300"
                            href="{{ route('pengumuman') }}">Pengumuman</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-900 hover:text-cyan-600">Keluar</button>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<header id="navbar" class="fixed top-0 left-0 w-full z-50 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
    <div class="hidden md:flex justify-between items-center py-2 border-b text-sm py-3" style="border-color: rgba(255, 255, 255, 0.25)" >
        <div class="">
            <ul class="flex text-white">
                <li>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24" >
                        <path
                            d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z"/>
                        </svg>

                        <a href="https://maps.app.goo.gl/pbE2sxMwGEVsQdrX6" target="_blank" title="Klik untuk melihat di Google Maps" class="ml-2 text-white hover:underline" >
                            Kuncen 9/2 Tanjungsari Banyudono Boyolali
                        </a>
                    </div>
                </li>
                <li class="ml-6">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24" >
                        <path
                            d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z"/>
                        </svg>
                        <span class="ml-2 font-sans">+62 822-2522-9329</span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="">
            <ul class="flex justify-end text-white">
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded-full"
                    href="login.html">Gabung Sekarang</a
                    >
                </li>

                <svg class="h-10 w-10 text-white ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </ul>
        </div>
    </div>

    <div class="flex flex-wrap items-center justify-between py-6">
        <div class="w-1/2 md:w-auto">
            <a href="index.html" class="text-white font-bold text-2xl">
            PMB DYAH SUMARMO
            </a>
        </div>

        <input type="checkbox" id="menu-toggle" class="hidden" />

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>

        <div id="menu" class="hidden md:block w-full md:w-auto">
            <nav class="w-full bg-transparent md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
                <ul class="md:flex items-center">
                    <li>
                        <a class="py-2 inline-block md:text-white md:hidden lg:block font-semibold" href="#Tentang-Kami">
                            Tentang Kami</a>
                    </li>
                    <li class="md:ml-4">
                        <a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="#Layanan">
                            Layanan</a>
                    </li>

                    <li class="md:ml-4">
                        <a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="#" onclick="openModal()">
                            Jadwal</a>
                    </li>

                    <!-- Modal -->
                    <div id="scheduleModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden" >
                        <div class="bg-white rounded-lg shadow-lg p-6 w-80 relative">
                            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                                &times;
                            </button>

                            <div class="text-center">
                                <h2 class="text-lg font-bold">Jadwal Bidan</h2>
                            <div id="scheduleContent" class="my-4">
                                <p class="text-blue-500 font-semibold" id="date">
                                01/11/2056 </p>
                                <p class="text-sm text-gray-500" id="day">Jumat</p>
                                    <div class="flex justify-center items-center my-4 relative">
                                        <!-- SVG Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20 h-20">
                                            <path fill-rule="evenodd"
                                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                            clip-rule="evenodd"/>
                                        </svg>
                                        <div
                                            class="w-2.5 h-2.5 bg-green-500 rounded-full absolute top-1 right-1">
                                        </div>
                                    </div>
                                <p class="font-semibold text-gray-800" id="name">
                                Dokter Yanto Bin Maylan<br />Nama Bidan yg di Tempati
                                </p>
                            </div>

                            <!-- Navigation Arrows -->
                            <div class="flex justify-between items-center mt-4">
                                <button onclick="changeSlide(-1)" class="bg-blue-200 hover:bg-blue-300 text-blue-600 font-bold py-2 px-4 rounded-full">
                                    &#9664;
                                </button>
                                <button onclick="changeSlide(1)" class="bg-blue-200 hover:bg-blue-300 text-blue-600 font-bold py-2 px-4 rounded-full" >
                                    &#9654;
                                </button>
                            </div>

                            <!-- Indicator Dots -->
                            <div class="flex justify-center mt-4 space-x-1">
                                <span id="dot1" class="w-2 h-2 rounded-full"></span>
                                <span id="dot2" class="w-2 h-2 rounded-full"></span>
                                <span id="dot3" class="w-2 h-2 rounded-full"></span>
                            </div>
                            </div>
                        </div>
                    </div>

                    <script>
                    // Jadwal bidan data
                    const schedules = [
                        {
                        date: "01/11/2056",
                        day: "Jumat",
                        name: "Dokter Yanto Bin Maylan\nNama Bidan yg di Tempati",
                        },
                        {
                        date: "02/11/2056",
                        day: "Sabtu",
                        name: "Dokter Budi Raharjo\nNama Bidan yg di Tempati",
                        },
                        {
                        date: "03/11/2056",
                        day: "Minggu",
                        name: "Dokter Ani Wijaya\nNama Bidan yg di Tempati",
                        },
                    ];
                    let currentIndex = 0;

                    // Function to display schedule
                    function displaySchedule() {
                        const schedule = schedules[currentIndex];
                        document.getElementById("date").textContent = schedule.date;
                        document.getElementById("day").textContent = schedule.day;
                        document.getElementById("name").innerHTML =
                        schedule.name.replace("\n", "<br>");

                        // Update indicator dots
                        document
                        .getElementById("dot1")
                        .classList.remove("bg-black", "bg-gray-400");
                        document
                        .getElementById("dot2")
                        .classList.remove("bg-black", "bg-gray-400");
                        document
                        .getElementById("dot3")
                        .classList.remove("bg-black", "bg-gray-400");

                        if (currentIndex === 0) {
                        document.getElementById("dot1").classList.add("bg-black");
                        document
                            .getElementById("dot2")
                            .classList.add("bg-gray-400");
                        document
                            .getElementById("dot3")
                            .classList.add("bg-gray-400");
                        } else if (currentIndex === 1) {
                        document
                            .getElementById("dot1")
                            .classList.add("bg-gray-400");
                        document.getElementById("dot2").classList.add("bg-black");
                        document
                            .getElementById("dot3")
                            .classList.add("bg-gray-400");
                        } else if (currentIndex === 2) {
                        document
                            .getElementById("dot1")
                            .classList.add("bg-gray-400");
                        document
                            .getElementById("dot2")
                            .classList.add("bg-gray-400");
                        document.getElementById("dot3").classList.add("bg-black");
                        }
                    }

                    // Function to change schedule
                    function changeSlide(direction) {
                        currentIndex += direction;
                        if (currentIndex < 0) {
                        currentIndex = schedules.length - 1;
                        } else if (currentIndex >= schedules.length) {
                        currentIndex = 0;
                        }
                        displaySchedule();
                    }

                    // Function to open modal
                    function openModal() {
                        document
                        .getElementById("scheduleModal")
                        .classList.remove("hidden");
                        displaySchedule();
                    }

                    // Function to close modal
                    function closeModal() {
                        document
                        .getElementById("scheduleModal")
                        .classList.add("hidden");
                    }
                    </script>

                    <li class="md:ml-4 md:hidden lg:block">
                    <a
                        class="py-2 inline-block md:text-white md:px-2 font-semibold"
                        href="#Pengumuman"
                        >Pengumuman</a
                    >
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                    <a
                        class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded-full"
                        href="janjitemu.html"
                        >Daftar Konsultasi</a
                    >
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<script
    async
    src="https://www.googletagmanager.com/gtag/js?id=UA-131505823-4">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
    dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-131505823-4");
</script>
<script>
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY === 0) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-transparent");
        } else {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-blue-600");
        }
    });
</script>
<script>
    document
        .getElementById("menu-toggle")
        .addEventListener("change", function () {
            const menu = document.getElementById("menu");
            const navbar = document.querySelector(".navbar"); // Sesuaikan selector dengan elemen navbar Anda

            if (this.checked) {
                menu.classList.remove("hidden");
                menu.classList.add("bg-blue-600"); // Tambahkan background biru saat toggle aktif
                navbar.classList.add("bg-blue-600"); // Pastikan navbar juga berubah menjadi biru
            } else {
                menu.classList.add("hidden");
                navbar.classList.remove("bg-blue-600"); // Kembali transparan saat toggle dinonaktifkan dan di-scroll
            }
        });
</script>