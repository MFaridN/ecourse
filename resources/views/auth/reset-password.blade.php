@extends('layouts.app')
@section('body-class', 'no-padding')

@section('content')
<div class="auth-wrapper">
    <div class="card auth-card shadow border-0">
        <div class="row g-0">

            <!-- Gambar -->
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('images/login.png') }}" 
                     alt="Reset Password Image" 
                     class="img-fluid h-100 w-100" 
                     style="object-fit: cover;">
            </div>

            <!-- Form -->
            <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                <h3 class="text-center fw-bold mb-2" style="color: #E36C07">RESET PASSWORD</h3>
                <p class="auth-subtitle">
                    Silakan masukkan password baru Sobat untuk menyelesaikan proses reset.
                </p>                

                <form action="{{ route('password.update') }}" method="POST" class="auth-form">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control auth-input" name="email" placeholder="Masukkan Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password Baru</label>
                        <input type="password" class="form-control auth-input" name="password" placeholder="Masukkan Password Baru" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" class="form-control auth-input" name="password_confirmation" placeholder="Masukkan Ulang Password Baru" required>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-global">Reset Password</button>
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
