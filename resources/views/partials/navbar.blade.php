<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" height="40">
        </a>

        <!-- Toggle (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kursus</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#">FAQS</a></li>

                <!-- Dropdown Lainnya -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="lainnyaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lainnya
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="lainnyaDropdown">
                        <li><a class="dropdown-item" href="#">Menu 1</a></li>
                        <li><a class="dropdown-item" href="#">Menu 2</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Icon Chart -->
            <a class="me-3" href="#">
                <img src="{{ asset('images/Shopping_cart.svg') }}" alt="Chart" height="24">
            </a>

            <!-- Tombol -->
            <div class="d-flex">
                <a href="#" class="btn btn-nav btn-nav me-2">Masuk</a>
                <a href="#" class="btn btn-nav">Daftar</a>
            </div>
        </div>
    </div>
</nav>
