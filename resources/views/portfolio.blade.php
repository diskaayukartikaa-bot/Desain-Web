@extends('app')

@section('content')
<h2 class="text-center mb-5">Karya Terbaik</h2>

<!-- Grid Portofolio (Responsive) -->
<div class="row g-4 mb-5">
    <!-- Nanti bagian ini di-looping pakai data dari database untuk kriteria "Dinamis & Bisa Upload" -->
    <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Proyek 1">
            <div class="card-body">
                <h5 class="card-title text-primary">Proyek Digital Interaktif</h5>
                <p class="card-text">Pengembangan visual dan antarmuka untuk UMKM lokal.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Proyek 2">
            <div class="card-body">
                <h5 class="card-title text-primary">Manajemen Studio Podcast</h5>
                <p class="card-text">Sistem operasional dan pengaturan standar untuk penyiaran digital.</p>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Detail Kontak -->
<div class="row mt-5 p-5 bg-light rounded shadow-sm text-center">
    <div class="col-12">
        <h3>Mari Berkolaborasi!</h3>
        <p class="lead">Terbuka untuk kesempatan kerja sama skala internasional dan WFA.</p>
        <ul class="list-unstyled mt-3">
            <li>📍 <strong>Lokasi:</strong> Surabaya, Indonesia</li>
            <li>📧 <strong>Email:</strong> [Masukkan Email Kamu]</li>
            <li>💼 <strong>LinkedIn:</strong> [Masukkan Link LinkedIn Kamu]</li>
        </ul>
    </div>
</div>
@endsection