@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <!-- Tombol Kembali -->
    <a href="/portofolio" class="btn btn-sm btn-outline-purple rounded-pill px-3 mb-4 text-decoration-none">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri
    </a>

    <div class="row g-5">
        <!-- Kolom Kiri: Preview Video Embed / Media Utama -->
        <div class="col-lg-7">
            <div class="position-sticky" style="top: 100px;">
                @if($item->id == 1 || Str::contains(strtolower($item->title), ['short film', 'movie', 'lomba']))
                    <!-- RESPONSIVE VIDEO EMBED PLAYBOX (Untuk Short Film Juara 1) -->
                    <div class="shadow-lg rounded-4 overflow-hidden bg-black aspect-video ratio ratio-16x9 mb-4">
                        <!-- Ganti src link youtube di bawah dengan field embed url database Anda -->
                        <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE" title="Portfolio Preview" allowfullscreen></iframe>
                    </div>
                @else
                    <!-- Tampilan Gambar/Mockup Standar jika bukan kategori Video -->
                    <div class="shadow-sm rounded-4 overflow-hidden mb-4 bg-white p-2 border">
                        <img src="{{ asset('images/portfolio/' . ($item->image ?? 'default.jpg')) }}" class="img-fluid w-100 rounded-3" alt="Preview">
                    </div>
                @endif
            </div>
        </div>

        <!-- Kolom Kanan: Detail Deskripsi & Metadata Project -->
        <div class="col-lg-5">
            <span class="badge bg-light-pink p-2 px-3 rounded-pill fw-600 mb-3">{{ $item->badge }}</span>
            <h1 class="fw-bold text-purple display-6 mb-3">{{ $item->title }}</h1>
            
            <hr class="opacity-10 my-4">

            <h5 class="fw-bold text-purple mb-2"><i class="bi bi-file-earmark-text me-2"></i>Studi Kasus & Deskripsi</h5>
            <p class="text-muted" style="line-height: 1.8; text-align: justify;">
                {{ $item->desc }}
            </p>

            <div class="mt-5 p-4 bg-white rounded-4 shadow-sm border border-light">
                <h6 class="fw-bold text-purple mb-3"><i class="bi bi-info-circle me-2"></i>Informasi Proyek</h6>
                <div class="d-flex justify-content-between mb-2 small">
                    <span class="text-muted">Kategori Konten:</span>
                    <strong class="text-purple">{{ $item->category->name ?? 'Multimedia Production' }}</strong>
                </div>
                <div class="d-flex justify-content-between small">
                    <span class="text-muted">Status Rilis:</span>
                    <strong class="text-pink">Published / Verified</strong>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .text-purple { color: #4a148c; }
    .text-pink { color: #e91e63; }
    .btn-outline-purple {
        color: #6a1b9a;
        border-color: rgba(106, 27, 154, 0.3);
    }
    .btn-outline-purple:hover {
        background: linear-gradient(45deg, #e91e63, #9c27b0);
        color: white;
        border-color: transparent;
    }
</style>
@endsection