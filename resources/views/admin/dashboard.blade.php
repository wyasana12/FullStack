@extends('panel.layouts.app')
@section('title', 'Main Dashboard | PMB Dyah Sumarmo')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="max-w-7xl mx-auto space-y-8">
            <!-- Welcome Section (Full Width) -->
            <div class="bg-sky-200 rounded-xl shadow-lg overflow-hidden p-6">
                <div class="grid grid-cols-2 gap-6 items-center">
                    <!-- Left Column -->
                    <div class="text-center">
                        <h3 class="text-3xl font-bold text-sky-600 mb-4">
                            Hello Ms. Midwife!
                        </h3>
                        <img src="{{ url('assets/img/hero.png') }}" alt="Midwife illustration" class="mx-auto w-3/4 h-auto" />
                    </div>
                    <!-- Right Column -->
                    <div class="bg-sky-300 rounded-xl p-6 text-center text-white flex items-center justify-between">
                        <div class="text-left pr-6">
                            <h3 class="text-2xl font-semibold mb-4">
                                Full Dedication,<br />
                                For the Health of<br />
                                Mother and Baby
                            </h3>
                        </div>
                        <div class="flex justify-end">
                            <img src="{{ url('assets/img/bidan.png') }}" alt="Health illustration" class="mx-auto`" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Midwife Profile Section (Full Width) -->
            <div class="bg-blue-200 rounded-xl shadow-lg overflow-hidden p-6">
                <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">
                    Profil Bidan
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="flex items-center gap-6 bg-blue-100 rounded-lg p-4 shadow-md">
                            <div class="bg-sky-300 p-4 rounded-full">
                                <span class="text-2xl text-sky-600">👤</span>
                            </div>
                            <span class="text-lg font-medium">Bidan...</span>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Calendar Section -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <!-- Calendar Header -->
                <div class="flex justify-between items-center mb-6">
                    <h3 id="calendarMonth" class="text-2xl font-bold text-gray-700"></h3>
                    <div class="flex gap-4">
                        <button onclick="prevMonth()" class="text-gray-700 bg-gray-200 px-3 py-1 rounded shadow hover:bg-gray-300">
                            &lt;
                        </button>
                        <button onclick="nextMonth()" class="text-gray-700 bg-gray-200 px-3 py-1 rounded shadow hover:bg-gray-300">
                            &gt;
                        </button>
                    </div>
                </div>

                <!-- Days of the Week -->
                <div class="grid grid-cols-7 gap-2 text-center font-bold text-white">
                    <div class="p-2 bg-sky-500 rounded">Sun</div>
                    <div class="p-2 bg-sky-500 rounded">Mon</div>
                    <div class="p-2 bg-sky-500 rounded">Tue</div>
                    <div class="p-2 bg-sky-500 rounded">Wed</div>
                    <div class="p-2 bg-sky-500 rounded">Thu</div>
                    <div class="p-2 bg-sky-500 rounded">Fri</div>
                    <div class="p-2 bg-sky-500 rounded">Sat</div>
                </div>

                <!-- Calendar Dates -->
                <div id="calendarDates" class="grid grid-cols-7 gap-2 text-center mt-4"></div>
            </div>
        </div>

        <!-- JavaScript for Calendar -->
        <script>
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            let currentDate = new Date();

            function renderCalendar() {
                document.getElementById("calendarMonth").textContent = `${monthNames[currentDate.getMonth()]}, ${currentDate.getFullYear()}`;
                const calendarDates = document.getElementById("calendarDates");
                calendarDates.innerHTML = "";

                const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay();
                const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

                for (let i = 0; i < firstDayOfMonth; i++) {
                    calendarDates.innerHTML += `<div></div>`;
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const dateClass = day === new Date().getDate() &&
                        currentDate.getMonth() === new Date().getMonth() &&
                        currentDate.getFullYear() === new Date().getFullYear()
                        ? "p-2 bg-yellow-300 text-black font-bold rounded-full shadow"
                        : "p-2 bg-gray-100 rounded-full shadow hover:bg-sky-300 hover:text-white cursor-pointer";
                    calendarDates.innerHTML += `<div class="${dateClass}">${day}</div>`;
                }
            }

            function prevMonth() {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            }

            function nextMonth() {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            }

            renderCalendar();
        </script>
    </section>
@endsection
