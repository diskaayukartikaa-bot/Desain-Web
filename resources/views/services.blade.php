@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="text-center mb-5">
        <h6 class="text-uppercase fw-bold mb-2" style="letter-spacing: 4px; color: #e91e63;">What I Do</h6>
        <h1 class="display-4 fw-800" style="color: #4a148c; font-weight: 800;">Services<span style="color: #e91e63;">.</span></h1>
        <div class="mx-auto" style="width: 80px; height: 5px; background: linear-gradient(45deg, #e91e63, #9c27b0); border-radius: 10px;"></div>
    </div>

    <div class="row g-4 justify-content-center">
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
            <div class="p-4 h-100 shadow-sm border-0 bg-white text-center transition-up" style="border-radius: 25px; border: 1px solid rgba(0,0,0,0.02);">
                <div class="mb-4 d-flex align-items-center justify-content-center mx-auto" 
                     style="width: 80px; height: 80px; background: rgba(156, 39, 176, 0.08); color: #9c27b0; border-radius: 50%;">
                    <i class="bi {{ $service['icon'] }}" style="font-size: 2rem;"></i>
                </div>
                
                <h5 class="fw-bold mb-3" style="color: #4a148c;">{{ $service['title'] }}</h5>
                <p class="text-muted small px-2" style="line-height: 1.6;">{{ $service['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .fw-800 { font-weight: 800; }
    .transition-up { 
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); 
    }
    .transition-up:hover { 
        transform: translateY(-10px); 
        box-shadow: 0 15px 30px rgba(156, 39, 176, 0.1) !important;
        background: linear-gradient(to bottom right, #ffffff, #fffdfb);
    }
</style>
@endsection