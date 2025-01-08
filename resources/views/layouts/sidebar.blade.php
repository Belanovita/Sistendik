<!-- resources/views/layouts/sidebar.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Sidebar')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar {
            display: flex;
            flex-direction: column;
            height: 100vh; 
            overflow-y: auto;
        }

        .sidebar .nav {
            flex-grow: 1; 
        }

        .sidebar .nav-item:last-child {
            margin-top: auto; 
        }

        .sidebar h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #435EBE;
        }

        .sidebar .nav-link {
            color: #6c757d;
        }

        .sidebar .nav-link:hover {
            color: #435EBE; 
            background-color: #f0f0f0; /* Warna latar belakang saat hover */
        }

        /* Gaya untuk link yang aktif */
        .sidebar .nav-link.active {
            color: #435EBE; /* Warna teks aktif */
            font-weight: bold;
        }

        /* Responsif untuk pindah ke atas pada tampilan kecil */
        @media (max-width: 767px) {
            .sidebar {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
            }
            .main-content {
                margin-top: 200px; /* Memberi ruang untuk sidebar */
            }
        }

        .main-content {
            margin-top: 70px;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <h1>Sistendik</h1>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('home')) active @endif" aria-current="page" href="{{ url('/home') }}">
                                <i class="bi bi-house-door" style="margin-right: 10px;"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted @if(Request::is('tenaga-pendidik') || Request::is('siswa')) active @endif" href="#" data-bs-toggle="collapse" data-bs-target="#userSubMenu" aria-expanded="false" aria-controls="userSubMenu">
                                <i class="bi bi-person" style="margin-right: 10px;"></i>
                                User
                                <i class="bi bi-chevron-down float-end"></i> 
                            </a>
                            <div class="collapse @if(Request::is('tenaga-pendidik') || Request::is('siswa')) show @endif" id="userSubMenu">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('tenaga-pendidik')) active @endif" href="{{ url('/tenaga-pendidik') }}">
                                            <i class="bi bi-person-check" style="margin-right: 10px;"></i>
                                            Tenaga Pendidik
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('siswa')) active @endif" href="{{ url('/siswa') }}">
                                            <i class="bi bi-person-badge" style="margin-right: 10px;"></i>
                                            Siswa
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted @if(Request::is('kelas') || Request::is('mapel') || Request::is('jadwal-mengajar')) active @endif" href="#" data-bs-toggle="collapse" data-bs-target="#sistemSubMenu" aria-expanded="false" aria-controls="sistemSubMenu">
                                <i class="bi bi-gear" style="margin-right: 10px;"></i>
                                Sistem
                                <i class="bi bi-chevron-down float-end"></i>
                            </a>
                            <div class="collapse @if(Request::is('kelas') || Request::is('mapel') || Request::is('jadwal-mengajar')) show @endif" id="sistemSubMenu">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('kelas')) active @endif" href="{{ url('/kelas') }}">
                                            <i class="bi bi-building" style="margin-right: 10px;"></i>
                                            Kelas
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('mapel')) active @endif" href="{{ url('/mapel') }}">
                                            <i class="bi bi-book" style="margin-right: 10px;"></i>
                                            Mata Pelajaran
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('jadwal-mengajar')) active @endif" href="{{ url('/jadwal-mengajar') }}">
                                            <i class="bi bi-calendar-event" style="margin-right: 10px;"></i>
                                            Jadwal Mengajar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted @if(Request::is('rekap-perizinan') || Request::is('rekap-kehadiran-tendik') || Request::is('rekap-kehadiran-siswa') || Request::is('buku-kontrol')) active @endif" href="#" data-bs-toggle="collapse" data-bs-target="#rekapitulasiSubMenu" aria-expanded="false" aria-controls="rekapitulasiSubMenu">
                                <i class="bi bi-bar-chart" style="margin-right: 10px;"></i>
                                Rekapitulasi
                                <i class="bi bi-chevron-down float-end"></i>
                            </a>
                            <div class="collapse @if(Request::is('rekap-perizinan') || Request::is('rekap-kehadiran-tendik') || Request::is('rekap-kehadiran-siswa') || Request::is('buku-kontrol')) show @endif" id="rekapitulasiSubMenu">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('rekap-perizinan')) active @endif" href="{{ url('/rekap-perizinan') }}">
                                            <i class="bi bi-check-square" style="margin-right: 10px;"></i>
                                            Perizinan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('rekap-kehadiran-tendik')) active @endif" href="{{ url('/rekap-kehadiran-tendik') }}">
                                            <i class="bi bi-person-fill" style="margin-right: 10px;"></i>
                                            Kehadiran Tendik
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('rekap-kehadiran-siswa')) active @endif" href="{{ url('/rekap-kehadiran-siswa') }}">
                                            <i class="bi bi-person-lines-fill" style="margin-right: 10px;"></i>
                                            Kehadiran Siswa
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link @if(Request::is('buku-kontrol')) active @endif" href="{{ url('buku-kontrol') }}">
                                            <i class="bi bi-book" style="margin-right: 10px;"></i>
                                            Buku Kontrol
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="border-top: 1px solid #ddd;">
                                <i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i> Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var collapseElements = document.querySelectorAll('.collapse');
            collapseElements.forEach(function (collapseElement) {
                collapseElement.addEventListener('show.bs.collapse', function () {
                    // Close all other collapsible elements
                    collapseElements.forEach(function (otherCollapseElement) {
                        if (otherCollapseElement !== collapseElement) {
                            var collapse = new bootstrap.Collapse(otherCollapseElement, { toggle: false });
                            collapse.hide();
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>