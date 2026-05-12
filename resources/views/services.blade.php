@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="text-center mb-5">
        <h6 class="text-uppercase fw-bold mb-2" style="letter-spacing: 4px; color: #e91e63;">What I Do</h6>
        <h1 class="display-4 fw-800" style="color: #4a148c; font-weight: 800;">Services<span style="color: #e91e63;">.</span></h1>
        <div class="mx-auto" style="width: 80px; height: 5px; background: linear-gradient(45deg, #e91e63, #9c27b0); border-radius: 10px;"></div>
    </div>

    <div class="row g-4">
        @php
            $services = [
                ['icon' => 'bi-palette', 'title' => 'Art Direction', 'desc' => 'Mengarahkan konsep visual kreatif untuk branding dan kampanye digital.'],
                ['icon' => 'bi-camera-reels', 'title' => 'Video Production', 'desc' => 'Editing video profesional untuk kebutuhan televisi, YouTube, dan konten media sosial.'],
                ['icon' => 'bi-vector-pen', 'title' => 'Graphic Design', 'desc' => 'Pembuatan aset visual seperti poster, brosur, dan konten media sosial yang estetik.'],
                ['icon' => 'bi-layout-text-window-reverse', 'title' => 'UI/UX Design', 'desc' => 'Perancangan antarmuka pengguna yang intuitif menggunakan Figma dan Adobe XD.'],
                ['icon' => 'bi-box', 'title' => '3D Modeling', 'desc' => 'Pembuatan aset 3D dan animasi dasar untuk kebutuhan multimedia menggunakan Blender.'],
                ['icon' => 'bi-pencil-square', 'title' => 'Scriptwriting', 'desc' => 'Penulisan naskah kreatif untuk video promosi dan konten storytelling.']
            ];
        @endphp

        @foreach($services as $service)
        <div class="col-md-4">
            <div class="p-4 h-100 shadow-sm border-0 bg-white text-center transition-up" style="border-radius: 20px;">
                <div class="mb-3 d-inline-block p-3 rounded-circle" style="background: rgba(156, 39, 176, 0.1); color: #9c27b0;">
                    <i class="bi {{ $service['icon'] }} fs-2"></i>
                </div>
                <h5 class="fw-bold" style="color: #4a148c;">{{ $service['title'] }}</h5>
                <p class="text-muted small">{{ $service['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .transition-up { transition: all 0.3s ease; }
    .transition-up:hover { transform: translateY(-10px); }
</style>
@endsection