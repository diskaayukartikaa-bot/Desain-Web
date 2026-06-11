@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <a href="/portofolio" class="btn btn-sm btn-outline-purple rounded-pill px-3 mb-5 text-decoration-none">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri
    </a>

    <div class="row g-5">
        @if(!empty($item['video_url']) || !empty($item['image_url']))
        <div class="col-lg-6">
            <div class="position-sticky" style="top: 100px;">
                
                @if(!empty($item['video_url']))
                    <div class="shadow-lg rounded-4 overflow-hidden bg-black ratio ratio-16x9 mb-4 border border-2 border-white">
                        <iframe src="{{ $item['video_url'] }}" title="Project Video Preview" allowfullscreen></iframe>
                    </div>
                @endif

                @if(!empty($item['image_url']))
                    <div class="shadow-sm rounded-4 overflow-hidden mb-4 bg-white p-2 border">
                        <img src="{{ asset($item['image_url']) }}" class="img-fluid w-100 rounded-3" alt="Preview">
                    </div>
                @endif

                <div class="p-4 bg-white rounded-4 shadow-sm border border-light mt-4">
                    <h6 class="fw-bold text-purple mb-3"><i class="bi bi-info-circle me-2"></i>Project Metadata</h6>
                    <div class="d-flex justify-content-between mb-2 small border-bottom pb-2">
                        <span class="text-muted">Kategori:</span>
                        <strong class="text-purple-dark text-uppercase text-xs">{{ $item['category'] }}</strong>
                    </div>
                    <div class="d-flex justify-content-between small">
                        <span class="text-muted">Status Penilaian:</span>
                        <strong class="text-pink"><i class="bi bi-patch-check-fill me-1"></i>Verified Framework</strong>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="{{ (!empty($item['video_url']) || !empty($item['image_url'])) ? 'col-lg-6' : 'col-lg-12' }}">
            <span class="badge bg-light-{{ $item['color'] }} p-2 px-3 rounded-pill fw-600 mb-3">{{ $item['badge'] }}</span>
            <h1 class="fw-bold text-purple display-6 mb-4">{{ $item['title'] }}</h1>
            
            <div class="star-method-timeline mt-4">
                <div class="star-node mb-4 p-4 bg-white rounded-4 shadow-sm border-start border-4 border-purple">
                    <h5 class="fw-bold text-purple mb-2"><i class="bi bi-compass me-2"></i>1. Latar Belakang & Tantangan</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.8; text-align: justify;">
                        Pada awalnya, saya menghadapi situasi nyata di lingkungan kreatif Broadcasting, di mana terdapat sebuah tantangan teknis serta problem statement spesifik yang harus diselesaikan sebelum proyek <strong>{{ $item['title'] }}</strong> ini dieksekusi.
                    </p>
                </div>

                <div class="star-node mb-4 p-4 bg-white rounded-4 shadow-sm border-start border-4 border-pink">
                    <h5 class="fw-bold text-pink mb-2"><i class="bi bi-list-task me-2"></i>2. Peran & Tanggung Jawab</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.8; text-align: justify;">
                        Dalam pelaksanaan proyek ini, saya memegang peran penting yang bertanggung jawab penuh untuk merumuskan konsep, menetapkan batasan tugas, serta merancang sasaran utama agar output visual yang dihasilkan dapat berjalan efektif.
                    </p>
                </div>

                <div class="star-node mb-4 p-4 bg-white rounded-4 shadow-sm border-start border-4 border-purple">
                    <h5 class="fw-bold text-purple mb-2"><i class="bi bi-cpu me-2"></i>3. Metode Kerja & Eksekusi</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.8; text-align: justify;">
                        Untuk merealisasikan rencana tersebut, saya mengambil langkah taktis menggunakan tools produksi profesional industri multimedia dan melakukan manajemen workflow tim secara berkala agar seluruh tahapan selesai tepat waktu sesuai standar perkuliahan PENS.
                    </p>
                </div>

                <div class="star-node p-4 bg-light-pink rounded-4 shadow-sm border-start border-4 border-pink">
                    <h5 class="fw-bold text-pink mb-2"><i class="bi bi-trophy me-2"></i>4. Capaian Akhir & Dampak</h5>
                    <p class="text-purple small mb-0 fw-600" style="line-height: 1.8; text-align: justify;">
                        Melalui eksekusi nyata tersebut, saya berhasil meraih hasil akhir yang optimal dengan pencapaian yang kredibel, yaitu: <strong>{{ $item['desc'] }}</strong>. Dampak dari proyek ini memberikan kontribusi positif yang terstruktur dalam portofolio saya.
                    </p>
                </div>
            </div>
            
            @if(empty($item['video_url']) && empty($item['image_url']))
                <div class="p-3 bg-white rounded-4 shadow-sm border border-light mt-4 d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small me-2">Kategori:</span>
                        <strong class="text-purple-dark text-uppercase small">{{ $item['category'] }}</strong>
                    </div>
                    <div>
                        <strong class="text-pink small"><i class="bi bi-patch-check-fill me-1"></i>Verified Portfolio Layout</strong>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
    .text-purple { color: #4a148c; }
    .text-purple-dark { color: #6a1b9a; }
    .text-pink { color: #e91e63; }
    .bg-light-pink { background-color: #fff5f8; }
    .border-purple { border-color: #4a148c !important; }
    .border-pink { border-color: #e91e63 !important; }
    .fw-600 { font-weight: 600; }
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