<div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">SIGELATIK</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
        <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
        <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
        <li><a class="nav-link scrollto" href="#statistik">Statistik</a></li>
        <li><a class="nav-link scrollto" href="#team">Team Infrastruktur</a></li>
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
        {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
        @auth
        <li><a class="getstarted" href="{{route('home')}}">Dashboard</a></li>
        @else
        <li><a class="getstarted" href="{{route('login')}}">Masuk</a></li>
        @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>
