@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0 text-center">
            <div style="width: 350px; height: 450px; border-radius: 30px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.1); border: 8px solid white; margin: auto;">
                <img src="https://via.placeholder.com/350x450" alt="Diska Ayu Kartika" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>

        <div class="col-lg-7 ps-lg-5">
            <h6 class="text-uppercase fw-bold mb-3" style="letter-spacing: 3px; color: #e91e63;">Professional Profile</h6>
            <h2 class="display-4 fw-bold mb-4" style="color: #4a148c;">Diska Ayu Kartika</h2>
            
            <p class="lead mb-4 text-dark" style="line-height: 1.8;">
                Mahasiswa <strong>MMB PENS (NIM: 5124500005)</strong> yang aktif sebagai Program Director Siniar PENS. Saya berfokus pada pengembangan visual kreatif dan manajemen konten digital untuk mendukung peluang kerja internasional.
            </p>

            <div class="row g-3 mb-5">
                <div class="col-sm-6">
                    <div class="p-3 rounded-4 shadow-sm" style="background: rgba(156, 39, 176, 0.05);">
                        <h6 class="fw-bold mb-1" style="color: #9c27b0;">Leadership</h6>
                        <small class="text-muted">Ketua HIMA MMB & Director Siniar PENS</small>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-3 rounded-4 shadow-sm" style="background: rgba(233, 30, 99, 0.05);">
                        <h6 class="fw-bold mb-1" style="color: #e91e63;">Creative Skills</h6>
                        <small class="text-muted">UI/UX Design, 3D Modeling, Video Editing</small>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
                <a href="/portofolio" class="btn btn-lg px-5 shadow-sm" style="background: linear-gradient(45deg, #e91e63, #9c27b0); color: white; border-radius: 15px; border: none; font-weight: 600;">Portofolio</a>
                <a href="/" class="btn btn-outline-dark btn-lg px-4" style="border-radius: 15px; font-weight: 600;">Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection