@extends('layouts.app')
@section('body-class', 'no-padding')

@section('content')
<div class="auth-wrapper">
    <div class="card auth-card shadow border-0">
        <div class="row g-0">

            <!-- Gambar -->
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('images/login.png') }}" 
                     alt="Forgot Password Image" 
                     class="img-fluid h-100 w-100" 
                     style="object-fit: cover;">
            </div>

            <!-- Form -->
            <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                <h3 class="text-center fw-bold mb-2" style="color: #E36C07">LUPA PASSWORD</h3>
                <p class="auth-subtitle">
                    Silakan masukkan email Sobat untuk memulihkan password akun Nusantara Academy.
                </p>                

                <form action="{{ route('password.email') }}" method="POST" class="auth-form">
                    @csrf
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control auth-input" name="email" placeholder="Masukkan Email Anda" required>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-global">Kirim Link Pemulihan</button>
                    </div>                    
                </form>
                <!-- Link kembali ke login -->
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="small auth-text-back fw-semibold">
                        ← Kembali ke Login
                    </a>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
