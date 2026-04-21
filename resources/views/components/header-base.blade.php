<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('home') }}">SDN 02 PAGOJENGAN</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profile</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a class="{{ Request::is('sejarah') ? 'active' : '' }}"href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a class="{{ Request::is('vision') ? 'active' : '' }}" href="{{ route('vision') }}">Visi Dan Misi</a></li>
                        <li><a class="{{ Request::is('struktur-organisasi') ? 'active' : '' }}"href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a></li>
                        <li><a class="{{ Request::is('sambutanks') ? 'active' : '' }}"href="{{ route('sambutanks') }}">SambutanKepala Sekolah</a></li>
                        <li><a class="{{ Request::is('staff') ? 'active' : '' }}"href="{{ route('staff') }}">Pengajar</a></li>
                        
                        
                       
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Manajemen</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a class="{{ Request::is('fasilitas') ? 'active' : '' }}"
                                href="{{ route('fasilitas') }}">Fasilitas</a>
                        </li>
                        <li><a class="{{ Request::is('prestasi') ? 'active' : '' }}"
                                href="{{ route('prestasi') }}">Prestasi</a></li>
                        <li><a class="{{ Request::is('ekstrakulikuler') ? 'active' : '' }}"
                                href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Kegiatan</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a class="{{ Request::is('news') ? 'active' : '' }}" href="{{ route('news') }}">Berita</a>
                        </li>
                        <li><a class="{{ Request::is('galeri') ? 'active' : '' }}"
                                href="{{ route('galeri') }}">Galeri</a></li>

                    </ul>






                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                </ul>
            </li> --}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        @auth
            <a href="{{ route('dashboard') }}" class="get-started-btn">Dashboard</a>
            {{-- @else
        <a href="{{ route('login') }}" class="get-started-btn">Login</a> --}}
        @endauth
    </div>
</header>
