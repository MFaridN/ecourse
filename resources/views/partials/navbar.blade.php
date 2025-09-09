<nav class="carrd navbar navbar-expand-lg navbar-custom navbar-shadow-medium">
    <div class="container-fluid">
        <!-- Logo -->
        <a href="{{ asset('home') }}" class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" height="40">
        </a>

        <!-- Toggle (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ asset('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ asset('courses') }}">Kursus</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#">FAQS</a></li>

                <!-- Dropdown Lainnya -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="moreDropdown" role="button" aria-expanded="false">
                        Lainnya
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="lainnyaDropdown">
                        <li><a class="dropdown-item" href="#">Menu 1</a></li>
                        <li><a class="dropdown-item" href="#">Menu 2</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Icon Chart -->
            <a class="navbar-brand navbar-cart" href="#">
                <img src="{{ asset('images/Shopping_cart.svg') }}" alt="Chart" height="24">
                {{-- <i class="bi bi-cart"></i> --}}
            </a>
            <!-- Tombol -->
            <div class="d-flex align-items-center">

                {{-- Kalau user belum login --}}
                @guest
                    <a href="{{ route('login') }}" class="btn btn-nav me-2 shadow border-0">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-nav shadow border-0">Daftar</a>
                @endguest

                {{-- Kalau user sudah login --}}
                @auth
                    <div class="dropdown">
                        <a class="profile-icon dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-gear me-2"></i> Pengaturan
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-left me-2"></i> Keluar
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth

            </div>

        </div>
    </div>
</nav>
