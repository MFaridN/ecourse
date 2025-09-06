@extends('layouts.app')
@section('body-class', 'no-padding') {{-- kasih class no-padding supaya hilang jarak --}}

@section('content')
<div class="login-wrapper">
    <div class="card card-login shadow border-0">
        <div class="row g-0">

            <!-- Bagian Gambar (50%) -->
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('images/login.png') }}" 
                     alt="Login Image" 
                     class="img-fluid h-100 w-100" 
                     style="object-fit: cover;">
            </div>

            <!-- Bagian Form (50%) -->
            <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                <h3 class="text-center fw-bold mb-4">Halo Sobat Nusantara 👋</h3>

                <!-- Tab Masuk / Daftar -->
                <div class="d-flex justify-content-center mb-4 switch-btn">
                    <button class="btn btn-tab me-2 px-4">Masuk</button>
                    <button class="btn btn-tab px-4">Daftar</button>
                </div>

                <!-- Form Login -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control custom-input" name="email" placeholder="Masukan Email Anda" required>
                    </div>
                    <div class="mb-3 position-relative">
                        <input type="password" class="form-control custom-input" name="password" placeholder="Masukan Password Anda" required>
                        <a href="#" class="small position-absolute end-0 top-50 translate-middle-y me-3 text-orange">Lupa Password?</a>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-orange">Masuk</button>
                    </div>
                    <div class="text-center mb-3">
                        <span class="text-muted">Atau</span>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-google">
                            <i class="bi bi-google me-2"></i> Masuk Dengan Google
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
