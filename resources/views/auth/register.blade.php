@extends('layouts.app')
@section('body-class', 'no-padding')

@section('content')
<div class="auth-wrapper">
    <div class="card auth-card shadow border-0">
        <div class="row g-0">

            <!-- Gambar -->
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('images/login.png') }}" 
                     alt="Daftar Image" 
                     class="img-fluid h-100 w-100" 
                     style="object-fit: cover;">
            </div>

            <!-- Form -->
            <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                <h3 class="text-center fw-bold mb-4">Halo Sobat Nusantara 👋</h3>

                <!-- Tab -->
                <div class="auth-switch mx-auto">
                    <a href="{{ route('login') }}" class="btn auth-tab flex-fill me-1">Masuk</a>
                    <a href="{{ route('register') }}" class="btn auth-tab flex-fill  active">Daftar</a>
                </div>

                <p class="auth-subtitle">
                    Silahkan Registrasi Jika Sobat Belum Mempunyai Akun, Bergabunglah Menjadi Sobat Nusantara...!
                </p> 

                <!-- Form Daftar -->
                <form action="{{ route('register') }}" method="POST" class="auth-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control auth-input" name="name" placeholder="Masukan Nama Lengkap Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control auth-input" name="email" placeholder="Masukan Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control auth-input" name="password" placeholder="Masukan Password Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control auth-input" name="password_confirmation" placeholder="Masukan Konfirmasi Password Anda" required>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-global">Daftar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
