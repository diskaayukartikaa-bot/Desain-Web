@extends('app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h6 class="text-uppercase fw-bold text-pink tracking-wider">My Complete Works & Journey</h6>
        <h1 class="fw-extrabold display-4 text-purple">Portfolio Archive<span class="text-pink">.</span></h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Daftar karya visual, pengalaman kepemimpinan, trainer, dan sertifikasi profesional dalam dunia multimedia.
        </p>
    </div>

    <ul class="nav nav-pills justify-content-center mb-5 gap-2" id="portfolioTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active rounded-pill px-4 fw-bold" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-pane" type="button" role="tab">All Directory</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill px-4 fw-bold" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects-pane" type="button" role="tab">🎬 Projects & Films</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill px-4 fw-bold" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience-pane" type="button" role="tab">💼 Experience & Leadership</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill px-4 fw-bold" id="achievements-tab" data-bs-toggle="tab" data-bs-target="#achievements-pane" type="button" role="tab">🏆 Achievements & Certs</button>
        </li>
    </ul>

    <div class="tab-content" id="portfolioTabsContent">
        
        <div class="tab-pane fade show active" id="all-pane" role="tabpanel">
            <div class="row g-4">
                @include('partials.portfolio-items')
            </div>
        </div>

        <div class="tab-pane fade" id="projects-pane" role="tabpanel">
            <div class="row g-4">
                @include('partials.portfolio-items', ['filter' => 'projects'])
            </div>
        </div>

        <div class="tab-pane fade" id="experience-pane" role="tabpanel">
            <div class="row g-4">
                @include('partials.portfolio-items', ['filter' => 'experience'])
            </div>
        </div>

        <div class="tab-pane fade" id="achievements-pane" role="tabpanel">
            <div class="row g-4">
                @include('partials.portfolio-items', ['filter' => 'achievements'])
            </div>
        </div>

    </div>
</div>

@include('partials.portfolio-modals')

<style>
    .text-purple { color: #4a148c; }
    .text-pink { color: #e91e63; }
    .fw-extrabold { font-weight: 800; }
    
    /* Styling Tabs Active & Hover */
    .nav-pills .nav-link {
        color: #6a1b9a;
        background-color: rgba(106, 27, 154, 0.05);
        transition: all 0.3s ease;
    }
    .nav-pills .nav-link.active, .nav-pills .nav-link:hover {
        background: linear-gradient(45deg, #e91e63, #9c27b0) !important;
        color: white !important;
    }

    .portfolio-card {
        cursor: pointer;
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
    }
    .portfolio-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(156, 39, 176, 0.15) !important;
    }
    .portfolio-img {
        height: 200px;
        object-fit: cover;
    }
    .bg-light-purple { background-color: #f3e5f5; color: #4a148c; }
    .bg-light-pink { background-color: #fce4ec; color: #e91e63; }
    .bg-light-orange { background-color: #fff3e0; color: #e65100; }
</style>
@endsection