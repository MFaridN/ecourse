@extends('layouts.app')
@section('body-class', 'no-padding')

@section('content')
<div class="auth-wrapper">
    <div class="card auth-card shadow border-0">
        <div class="row g-0">

            <!-- Gambar -->
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('images/login.png') }}" 
                     alt="Login Image" 
                     class="img-fluid h-100 w-100" 
                     style="object-fit: cover;">
            </div>

            <!-- Form -->
            <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                <h3 class="text-center fw-bold mb-4">Halo Sobat Nusantara 👋</h3>

                <!-- Tab -->
                <div class="auth-switch mx-auto">
                    <a href="{{ route('login') }}" class="btn auth-tab flex-fill me-1 active">Masuk</a>
                    <a href="{{ route('register') }}" class="btn auth-tab flex-fill">Daftar</a>
                </div>
                <p class="auth-subtitle">
                    Silahkan melakukan login untuk menjelajahi Dunia Academy Nusantara!
                </p>                
                <!-- Form Login -->
                <form action="{{ route('login') }}" method="POST" class="auth-form">
                    @csrf
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control auth-input" name="email" placeholder="Masukan Email Anda" required>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password">Password</label>
                        <input type="password" class="form-control auth-input" name="password" placeholder="Masukan Password Anda" required>
                        <a href="{{ asset('forgot-password') }}" class="small end-0 top-50 translate-middle-y me-3 text-orange">Lupa Password?</a>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-global">Masuk</button>
                    </div>
                    <div class="text-center mb-3">
                        <span class="text-muted">Atau</span>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-light">
                            <i class="bi bi-google me-2"></i> Masuk Dengan Google
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
