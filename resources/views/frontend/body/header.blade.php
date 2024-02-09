<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <div class="row">
            <div class="col-2">
                <a href="{{ route('welcome') }}" class="logo">
                    <img src="{{ asset('img/logopkmsukamulya.png') }}" alt="">
                </a>
            </div>
            <div class="col-sm">
                <h4 class="logo">Puskesmas Sukamulya</h4>
            </div>
        </div>

        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <h6 class="logo me-auto"><a href="index.html"></a></h6> --}}

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="{{ route('welcome') }}">Home</a></li>
                <li class="dropdown"><a href="#"><span>Pelayanan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Pengaduan</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
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
                </li>
                <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>UKM Esensial</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Promosi Kesehatan</a></li>
                                <li><a href="#">Kesehatan Lingkungan</a></li>
                                <li class="dropdown"><a href="#"><span>Kesehatan Keluarga</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Promosi Kesehatan</a></li>
                                        <li><a href="#">UKS dan PKPR</a></li>
                                        <li><a href="#">UKGS</a></li>
                                        <li><a href="#">Kesehatan Ibu</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Pencegahan dan Pengendalian Penyakit</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">Promosi Kesehatan</a></li>
                                        <li><a href="#">UKS dan PKPR</a></li>
                                        <li><a href="#">UKGS</a></li>
                                        <li><a href="#">Kesehatan Ibu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pelayanan Gizi</a></li>

                                <li><a href="#">Perkesmas</a></li>
                                <li><a href="#">TB</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                                <li><a href="#">Promosi Kesehatan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>UKM Pengembangan</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('profil-puskesmas') }}">Profil Puskesmas</a></li>
                        <li><a href="#">Visi dan Misi</a></li>
                        <li><a href="#">SDM</a></li>
                        <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#services">Artikel</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="appointment-btn scrollto">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="appointment-btn scrollto">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="appointment-btn scrollto">Register</a>
                @endif
            @endauth
        @endif
        {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
            Appointment</a> --}}

    </div>
</header>
