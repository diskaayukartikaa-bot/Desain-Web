@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <a href="/portofolio" class="btn btn-sm btn-outline-purple rounded-pill px-3 mb-5 text-decoration-none">
        <i class="bi bi-arrow-left me-1"></i> Kembali ke Galeri
    </a>

    <div class="row g-5">
        <div class="col-lg-6">
            <div class="position-sticky" style="top: 100px;">
                @if(Str::contains(strtolower($item['title']), ['film', 'movie', 'video', 'lomba', 'siniar']))
                    <div class="shadow-lg rounded-4 overflow-hidden bg-black ratio ratio-16x9 mb-4 border border-2 border-white">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Project Video Preview" allowfullscreen></iframe>
                    </div>
                @else
                    <div class="shadow-sm rounded-4 overflow-hidden mb-4 bg-white p-2 border">
                        <img src="{{ asset('images/portfolio/default.jpg') }}" class="img-fluid w-100 rounded-3" alt="Preview">
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

        <div class="col-lg-6">
            <span class="badge bg-light-{{ $item['color'] }} p-2 px-3 rounded-pill fw-600 mb-3">{{ $item['badge'] }}</span>
            <h1 class="fw-bold text-purple display-6 mb-4">{{ $item['title'] }}</h1>
            
            <div class="star-method-timeline mt-4">
                <div class="star-node mb-4 p-4 bg-white rounded-4 shadow-sm border-start border-4 border-purple">
                    <h5 class="fw-bold text-purple mb-2"><i class="bi bi-compass me-2"></i>S - Situation (Latar Belakang)</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.7; text-align: justify;">
                        Menjelaskan situasi awal, tantangan, atau problem statement yang dihadapi di industri kreatif atau lingkungan perkuliahan Broadcasting sebelum proyek <strong>{{ $item['title'] }}</strong> ini dieksekusi.
                    </p>
                </div>

                <div class="star-node mb-4 p-4 bg-white rounded-4 shadow-sm border-start border-4 border-pink">
                    <h5 class="fw-bold text-pink mb-2"><i class="bi bi-list-task me-2"></i>T - Task (Tanggung Jawab)</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.7; text-align: justify;">
                        Menjelaskan batasan tugas, sasaran utama yang harus dicapai, serta peran profesional Diska Ayu (seperti Art Director, Project Leader, atau Video Editor) dalam merumuskan solusi atas tantangan tersebut.
                    </p>
                </div>

                <div class="star-node mb-4 p-4 bg-white rounded-4 shadow-sm border-start border-4 border-purple">
                    <h5 class="fw-bold text-purple mb-2"><i class="bi bi-cpu me-2"></i>A - Action (Eksekusi Nyata)</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.7; text-align: justify;">
                        Langkah taktis produksi yang diambil. Menjabarkan implementasi tools profesional (seperti Adobe Premiere, Illustrator, atau framework Laravel) untuk mengeksekusi karya visual secara efektif.
                    </p>
                </div>

                <div class="star-node p-4 bg-light-pink rounded-4 shadow-sm border-start border-4 border-pink">
                    <h5 class="fw-bold text-pink mb-2"><i class="bi bi-trophy me-2"></i>R - Result (Dampak & Hasil Akhir)</h5>
                    <p class="text-purple small mb-0 fw-600" style="line-height: 1.7; text-align: justify;">
                        Hasil akhir nyata yang berhasil diraih, termasuk pencapaian prestisius seperti: <strong>{{ $item['desc'] }}</strong> yang memberikan dampak positif yang terukur.
                    </p>
                </div>
            </div>
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