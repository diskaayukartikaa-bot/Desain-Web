@extends('app')

@section('content')
<div class="container py-5 mt-5 animate-fade-in">
    <div class="row mb-5 align-items-end animate-slide-up">
        <div class="col-md-8 text-center text-md-start">
            <h6 class="text-uppercase fw-bold mb-2" style="letter-spacing: 4px; color: #e91e63;">Creative Professional</h6>
            <h1 class="display-3 fw-800 mb-0" style="color: #4a148c; font-weight: 800; letter-spacing: -2px;">About Diska Ayu<span style="color: #e91e63;">.</span></h1>
        </div>
        <div class="col-md-4 mt-4 mt-md-0 text-center text-md-end">
             <div class="mx-auto mx-md-0 ms-md-auto animate-width" style="width: 80px; height: 6px; background: linear-gradient(45deg, #e91e63, #9c27b0); border-radius: 10px;"></div>
        </div>
    </div>

    <div class="row mb-5 g-4 text-center">
        <div class="col-6 col-md-3 animate-zoom-in" style="animation-delay: 0.1s;">
            <div class="p-3 shadow-sm border-0 rounded-4 bg-white stat-card">
                <h2 class="fw-bold mb-0" style="color: #e91e63;">2+</h2>
                <small class="text-muted text-uppercase fw-600">Years Exp.</small>
            </div>
        </div>
        <div class="col-6 col-md-3 animate-zoom-in" style="animation-delay: 0.2s;">
            <div class="p-3 shadow-sm border-0 rounded-4 bg-white stat-card">
                <h2 class="fw-bold mb-0" style="color: #9c27b0;">15+</h2>
                <small class="text-muted text-uppercase fw-600">Projects</small>
            </div>
        </div>
        <div class="col-6 col-md-3 animate-zoom-in" style="animation-delay: 0.3s;">
            <div class="p-3 shadow-sm border-0 rounded-4 bg-white stat-card">
                <h2 class="fw-bold mb-0" style="color: #e91e63;">05+</h2>
                <small class="text-muted text-uppercase fw-600">Awards</small>
            </div>
        </div>
        <div class="col-6 col-md-3 animate-zoom-in" style="animation-delay: 0.4s;">
            <div class="p-3 shadow-sm border-0 rounded-4 bg-white stat-card">
                <h2 class="fw-bold mb-0" style="color: #9c27b0;">100%</h2>
                <small class="text-muted text-uppercase fw-600">Passion</small>
            </div>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-lg-4 animate-slide-left">
            <div class="p-4 bg-white shadow-sm sticky-top" style="border-radius: 25px; top: 100px; border: 1px solid rgba(0,0,0,0.05);">
                <div class="text-center mb-4">
                    <div class="profile-img-container" style="width: 180px; height: 180px; border-radius: 50%; overflow: hidden; margin: 0 auto 20px; border: 5px solid #f8f9fa; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">
                        <img src="{{ asset('images/diska_profile.jpg') }}" alt="Diska Ayu Kartika" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 class="fw-bold mb-1" style="color: #4a148c;">Diska Ayu Kartika</h4>
                    <p class="text-muted small text-uppercase" style="letter-spacing: 1px;">Multimedia Specialist & Art Director</p>
                </div>

                <div class="pt-3 border-top">
                    <div class="d-flex align-items-center mb-3 contact-item">
                        <div class="me-3 p-2 bg-light rounded-3"><i class="bi bi-geo-alt"></i></div>
                        <div><small class="text-muted d-block">Location</small><strong>Surabaya, Indonesia</strong></div>
                    </div>
                    <div class="d-flex align-items-center mb-3 contact-item">
                        <div class="me-3 p-2 bg-light rounded-3"><i class="bi bi-envelope"></i></div>
                        <div><small class="text-muted d-block">Email</small><strong>diskaayukartikaa@gmail.com</strong></div>
                    </div>
                    <div class="d-flex align-items-center contact-item">
                        <div class="me-3 p-2 bg-light rounded-3"><i class="bi bi-instagram"></i></div>
                        <div><small class="text-muted d-block">Social</small><strong>@dayyyka_</strong></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 animate-slide-right">
            <div class="mb-5">
                <h5 class="fw-bold mb-3" style="color: #4a148c;"><i class="bi bi-person-badge me-2"></i>Executive Summary</h5>
                <p class="text-muted" style="line-height: 1.8; text-align: justify; font-size: 1.05rem;">
                    Mahasiswa Teknologi Multimedia Broadcasting di PENS dengan dedikasi tinggi pada inovasi digital. Memiliki pengalaman profesional sebagai <strong>Video Editor di Jawa Pos TV</strong> dan <strong>Art Director</strong> di agency kreatif. Fokus utama saya adalah menciptakan solusi visual yang menggabungkan fungsionalitas teknologi dengan estetika desain modern untuk skala global.
                </p>
            </div>

            <div class="mb-5">
                <h5 class="fw-bold mb-3" style="color: #4a148c;"><i class="bi bi-briefcase me-2"></i>Work Experience</h5>
                <div class="table-responsive shadow-sm rounded-4" style="overflow: hidden; border: 1px solid rgba(0,0,0,0.05);">
                    <table class="table table-hover mb-0" style="background: white;">
                        <thead style="background: rgba(156, 39, 176, 0.05);">
                            <tr>
                                <th class="border-0 p-3" style="color: #4a148c; width: 30%;">Period</th>
                                <th class="border-0 p-3" style="color: #4a148c;">Role & Organization</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td class="p-3 text-muted">2025 - Present</td>
                                <td class="p-3">
                                    <strong style="color: #e91e63;">Art Director</strong>
                                    <p class="mb-0 small text-muted">Viscara Agency (Start-up)</p>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td class="p-3 text-muted">2024 - 2025</td>
                                <td class="p-3">
                                    <strong style="color: #e91e63;">Graphic Designer & Content Creator</strong>
                                    <p class="mb-0 small text-muted">Trix Collective Agency</p>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td class="p-3 text-muted">2023 - 2024</td>
                                <td class="p-3">
                                    <strong style="color: #e91e63;">Video Editor (News Program)</strong>
                                    <p class="mb-0 small text-muted">Jawa Pos TV (National Media)</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-5">
                <h5 class="fw-bold mb-3" style="color: #4a148c;"><i class="bi bi-trophy me-2"></i>Key Achievements</h5>
                <div class="table-responsive shadow-sm rounded-4" style="overflow: hidden; border: 1px solid rgba(0,0,0,0.05);">
                    <table class="table table-hover mb-0" style="background: white;">
                        <thead style="background: rgba(233, 30, 99, 0.05);">
                            <tr>
                                <th class="border-0 p-3" style="color: #4a148c; width: 30%;">Year</th>
                                <th class="border-0 p-3" style="color: #4a148c;">Award / Competition</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td class="p-3 text-muted">2024</td>
                                <td class="p-3"><strong>Juara 1 Short Movie Nasional</strong> <br><small class="text-muted text-uppercase">Kategori Mahasiswa - Kompetisi IT</small></td>
                            </tr>
                            <tr class="align-middle">
                                <td class="p-3 text-muted">2023</td>
                                <td class="p-3"><strong>Juara 1 Konten TikTok</strong> <br><small class="text-muted text-uppercase">Hari Remaja Genre Jawa Timur</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold mb-3" style="color: #4a148c;"><i class="bi bi-cpu me-2"></i>Expertise</h5>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge rounded-pill p-3 px-4 shadow-sm expertise-tag" style="background: white; border: 1px solid rgba(156, 39, 176, 0.2); color: #9c27b0; font-weight: 600;">UI/UX Design</span>
                    <span class="badge rounded-pill p-3 px-4 shadow-sm expertise-tag" style="background: white; border: 1px solid rgba(156, 39, 176, 0.2); color: #9c27b0; font-weight: 600;">Video Editing</span>
                    <span class="badge rounded-pill p-3 px-4 shadow-sm expertise-tag" style="background: white; border: 1px solid rgba(156, 39, 176, 0.2); color: #9c27b0; font-weight: 600;">3D Modeling</span>
                    <span class="badge rounded-pill p-3 px-4 shadow-sm expertise-tag" style="background: white; border: 1px solid rgba(156, 39, 176, 0.2); color: #9c27b0; font-weight: 600;">Art Direction</span>
                    <span class="badge rounded-pill p-3 px-4 shadow-sm expertise-tag" style="background: white; border: 1px solid rgba(156, 39, 176, 0.2); color: #9c27b0; font-weight: 600;">Scriptwriting</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fw-800 { font-weight: 800; }
    .fw-600 { font-weight: 600; }
    .table tr:hover { background-color: rgba(156, 39, 176, 0.02) !important; cursor: default; }

    /* --- Keyframe Animations --- */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideLeft {
        from { opacity: 0; transform: translateX(-50px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes slideRight {
        from { opacity: 0; transform: translateX(50px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes zoomIn {
        from { opacity: 0; transform: scale(0.8); }
        to { opacity: 1; transform: scale(1); }
    }
    @keyframes expandWidth {
        from { width: 0; }
        to { width: 80px; }
    }

    /* --- Animation Classes --- */
    .animate-fade-in { animation: fadeIn 1s ease-out; }
    .animate-slide-up { animation: slideUp 0.8s ease-out forwards; }
    .animate-slide-left { animation: slideLeft 0.8s ease-out forwards; }
    .animate-slide-right { animation: slideRight 0.8s ease-out forwards; }
    .animate-zoom-in { animation: zoomIn 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards; opacity: 0; }
    .animate-width { animation: expandWidth 1.2s ease-in-out forwards; }

    /* --- Hover Interactions --- */
    .stat-card { transition: all 0.3s ease; }
    .stat-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(156, 39, 176, 0.1) !important; }
    
    .profile-img-container img { transition: transform 0.5s ease; }
    .profile-img-container:hover img { transform: scale(1.1); }
    
    .contact-item { transition: transform 0.3s ease; }
    .contact-item:hover { transform: translateX(5px); }

    .expertise-tag { transition: all 0.3s ease; }
    .expertise-tag:hover { background: #9c27b0 !important; color: white !important; transform: scale(1.05); }
</style>
@endsection