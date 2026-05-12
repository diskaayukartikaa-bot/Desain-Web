@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0 text-center">
            <div class="position-relative d-inline-block">
                <div style="width: 350px; height: 450px; border-radius: 30px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.1); border: 8px solid white;">
                    <img src="https://via.placeholder.com/350x450" alt="Diska Ayu Kartika" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-white shadow-lg" style="border-radius: 15px; border-left: 5px solid #e91e63;">
                    <h5 class="mb-0 fw-bold" style="color: #4a148c;">20+</h5>
                    <small class="text-muted">Projects Completed</small>
                </div>
            </div>
        </div>

        <div class="col-lg-7 ps-lg-5">
            <h6 class="text-uppercase fw-bold mb-3" style="letter-spacing: 3px; color: #e91e63;">The Person Behind the Design</h6>
            <h2 class="display-4 fw-bold mb-4" style="color: #4a148c;">I'm Diska Ayu Kartika</h2>
            
            <p class="lead mb-4 text-dark" style="line-height: 1.8;">
                Seorang mahasiswi <strong>Multimedia Broadcasting di PENS</strong> yang berdedikasi dalam menciptakan narasi visual melalui teknologi digital. Sebagai <strong>Program Director Siniar PENS</strong> dan <strong>Ketua HIMA MMB</strong>, saya mengombinasikan kepemimpinan strategis dengan keahlian teknis dalam desain kreatif.
            </p>

            <div class="row g-3 mb-5">
                <div class="col-sm-6">
                    <div class="p-3 border-0 rounded-4 shadow-sm" style="background: rgba(156, 39, 176, 0.05);">
                        <h6 class="fw-bold mb-1" style="color: #9c27b0;">Leadership</h6>
                        <small class="text-muted">Ketua HIMA MMB & Director Siniar PENS</small>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="p-3 border-0 rounded-4 shadow-sm" style="background: rgba(233, 30, 99, 0.05);">
                        <h6 class="fw-bold mb-1" style="color: #e91e63;">Creative Tools</h6>
                        <small class="text-muted">Figma, Canva, Adobe Illustrator, & Blender</small>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
                <a href="/portofolio" class="btn btn-lg px-5 shadow-sm" style="background: linear-gradient(45deg, #e91e63, #9c27b0); color: white; border-radius: 15px; border: none; font-weight: 600;">
                    View Portfolio
                </a>
                <a href="https://linkedin.com" target="_blank" class="btn btn-outline-dark btn-lg px-4" style="border-radius: 15px; font-weight: 600;">
                    Connect on LinkedIn
                </a>
            </div>
        </div>
    </div>
</div>
@endsection