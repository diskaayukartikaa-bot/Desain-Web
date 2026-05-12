@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0 text-center">
            <div class="position-relative d-inline-block">
                <div style="width: 350px; height: 450px; border-radius: 30px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.1); border: 8px solid white;">
                    <img src="{{ asset('images/diska_profile.jpg') }}" alt="Diska Ayu Kartika" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-white shadow-lg text-start" style="border-radius: 15px; border-left: 5px solid #e91e63; min-width: 200px;">
                    <h6 class="mb-1 fw-bold" style="color: #4a148c;">Juara 1 Short Movie</h6>
                    [cite_start]<small class="text-muted">Kompetisi Nasional IT 2024</small> [cite: 58, 60]
                </div>
            </div>
            
            <div class="mt-4 text-start ps-lg-5">
                [cite_start]<p class="mb-1"><strong>📍 Location:</strong> Surabaya, Jawa Timur</p> [cite: 12]
                [cite_start]<p class="mb-1"><strong>📧 Email:</strong> diskaayukartikaa@gmail.com</p> [cite: 10]
                [cite_start]<p class="mb-0"><strong>📱 Social:</strong> @dayyyka_</p> [cite: 11]
            </div>
        </div>

        <div class="col-lg-7 ps-lg-5">
            <h6 class="text-uppercase fw-bold mb-3" style="letter-spacing: 3px; color: #e91e63;">Curriculum Vitae</h6>
            <h2 class="display-4 fw-bold mb-4" style="color: #4a148c;">Diska Ayu Kartika</h2>
            
            <p class="lead mb-4 text-dark" style="line-height: 1.8; text-align: justify;">
                [cite_start]Saya adalah mahasiswa <strong>Teknologi Multimedia Broadcasting di PENS</strong>[cite: 5, 17]. [cite_start]Sebagai pribadi yang aktif dan kreatif, saya memiliki pengalaman luas dalam dunia digital, mulai dari menjadi <strong>Editor Video di Jawa Pos TV</strong> [cite: 44, 45] [cite_start]hingga menjabat sebagai <strong>Art Director</strong> di agency start-up[cite: 51]. [cite_start]Fokus saya adalah berinovasi di bidang digital guna membantu memajukan perusahaan melalui desain dan konten yang berdampak[cite: 7].
            </p>

            <h5 class="fw-bold mb-3" style="color: #4a148c;">Professional Experience</h5>
            <div class="row g-3 mb-5">
                <div class="col-md-6">
                    <div class="p-3 rounded-4 shadow-sm h-100" style="background: rgba(156, 39, 176, 0.05);">
                        <h6 class="fw-bold mb-1" style="color: #9c27b0;">Creative Agency Expert</h6>
                        [cite_start]<small class="text-muted">Graphic Designer & Content Creator di Trix Collective & Viskara Agency (2024 - Sekarang)</small> [cite: 47, 48, 50, 51]
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 rounded-4 shadow-sm h-100" style="background: rgba(233, 30, 99, 0.05);">
                        <h6 class="fw-bold mb-1" style="color: #e91e63;">Broadcast Editor</h6>
                        [cite_start]<small class="text-muted">Video Editor Program News di Jawa Pos TV (Update Siang, Radar, Selebriti)</small> [cite: 44, 45, 46]
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
                <a href="/portofolio" class="btn btn-lg px-5 shadow-sm" style="background: linear-gradient(45deg, #e91e63, #9c27b0); color: white; border-radius: 15px; border: none; font-weight: 600;">
                    Eksplor Portofolio
                </a>
                <a href="{{ asset('files/CV_Diska_Ayu.pdf') }}" target="_blank" class="btn btn-outline-dark btn-lg px-4" style="border-radius: 15px; font-weight: 600;">
                    Download Full CV
                </a>
            </div>
        </div>
    </div>
</div>
@endsection