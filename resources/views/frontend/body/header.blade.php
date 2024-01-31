<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <div class="row">
            <div class="col-2">
                <a href="{{ route('welcome') }}" class="logo">
                    <img src="{{ asset('frontend/assets/img/favicon.png') }}" alt="">
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
                <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
                <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
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
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
