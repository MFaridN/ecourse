@extends('layouts.app')
@section('body-class', '')
@section('content')
    <!-- Banner / Hero -->
    <div class="hero-wrapper">
        <img src="{{ asset('images/course-banner.jpg') }}" alt="Course Banner" class="img-fluid w-100 hero-img">
    </div>
    <div class="container my-5">
        <!-- Welcome Back Section -->
        <section class="mb-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold">Selamat datang kembali, siap untuk pelajaran berikutnya?</h4>
                <a href="#" class="text-decoration-none" style="color:#E36C07;">Lihat riwayat</a>
            </div>

            <div class="row">
                <!-- Card progress course -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-0 h-100">
                        <img src="{{ asset('images/course1.png') }}" class="card-img-top" alt="Course">
                        <div class="card-body">
                            <h6 class="fw-bold">Dari Nol Hingga Menjadi Pro Photoshop</h6>
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('images/mentor.png') }}" class="rounded-circle me-2" width="30" height="30">
                                <small>Arif Tri Cahyadi</small>
                            </div>
                            <div class="progress mb-2" style="height:6px;">
                                <div class="progress-bar bg-warning" style="width: 45%;"></div>
                            </div>
                            <small class="text-muted">5 dari 11</small>
                        </div>
                    </div>
                </div>
                <!-- duplikasikan card ini untuk course lain -->
            </div>
        </section>

        <!-- Search & Filter -->
        <section class="mb-5">
            <div class="input-group mb-4">
                <input type="text" class="form-control auth-input" placeholder="Cari Kursus yang Kamu Inginkan">
                <button class="btn btn-global">Cari</button>
            </div>

            <div class="row">
                <!-- Sidebar Kategori -->
                <div class="col-md-3 mb-4">
                    <div class="list-group shadow-sm">
                        <a href="#" class="list-group-item list-group-item-action active" style="background:#E36C07; border:none;">
                            Semua Kategori
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Desain Grafis</a>
                        <a href="#" class="list-group-item list-group-item-action">Ilustrasi</a>
                        <a href="#" class="list-group-item list-group-item-action">Video Editing</a>
                        <a href="#" class="list-group-item list-group-item-action">Animasi & Multimedia</a>
                        <a href="#" class="list-group-item list-group-item-action">Lainnya</a>
                    </div>
                </div>
                
                <!-- Course List -->
                <div class="col-md-9">
                    <div class="row">
                        @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow border-0 h-100">
                                <img src="{{ asset('images/course-thumb.png') }}" class="card-img-top" alt="Course">
                                <div class="card-body">
                                    <h6 class="fw-bold">101 Negosiasi Terhadap Client</h6>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-play-btn-fill me-2"></i>
                                        <small>5 Video</small>
                                        <i class="bi bi-magic ms-3 me-2"></i>
                                        <small>Soft Skill</small>
                                    </div>
                                    <p class="fw-bold text-danger mb-2">Rp 99.000</p>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/mentor.png') }}" class="rounded-circle me-2" width="30" height="30">
                                        <small>Arif Tri Cahyadi</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
