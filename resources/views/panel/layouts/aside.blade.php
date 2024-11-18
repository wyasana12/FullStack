<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar bg-gradient-to-r from-cyan-500 to-blue-600 text-white">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link flex items-center py-3 px-4 hover:bg-cyan-600 transition duration-200"
                href="{{ url('admin/dashboard') }}">
                <i class="bi bi-grid text-xl"></i>
                <span class="ml-3 text-lg font-semibold">Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading font-bold text-white text-lg px-4 py-2 mt-4 uppercase">Pages</li>

        <li class="nav-item">
            <a class="nav-link flex items-center py-3 px-4 hover:bg-cyan-600 transition duration-200"
                href="{{ url('admin/bidan') }}">
                <i class="bi bi-person text-xl"></i>
                <span class="ml-3 text-lg font-semibold">Bidan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link flex items-center py-3 px-4 hover:bg-cyan-600 transition duration-200"
                href="{{ url('admin/pasien') }}">
                <i class="bi bi-person text-xl"></i>
                <span class="ml-3 text-lg font-semibold">Pasien</span>
            </a>
        </li><!-- End User Page Nav -->

        <li class="nav-item">
            <a class="nav-link flex items-center py-3 px-4 hover:bg-cyan-600 transition duration-200"
                href="{{ url('admin/pengumuman') }}">
                <i class="bi bi-megaphone text-xl"></i>
                <span class="ml-3 text-lg font-semibold">Pengumuman</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link flex items-center py-3 px-4 hover:bg-cyan-600 transition duration-200"
                href="{{ url('admin/jadwal') }}">
                <i class="bi bi-calendar text-xl"></i>
                <span class="ml-3 text-lg font-semibold">Jadwal</span>
            </a>
        </li>

        <div class="mt-16">
            <li class="nav-item">
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="nav-link flex items-center py-3 px-4 hover:bg-cyan-600 transition duration-200" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="ml-3 text-lg font-semibold">Logout</span>
                </a>
            </li>
        </div>
    </ul>

</aside><!-- End Sidebar-->
