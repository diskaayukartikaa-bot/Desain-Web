@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="text-center mb-5">
        <h6 class="text-uppercase fw-bold mb-2" style="letter-spacing: 4px; color: #e91e63;">My Creative Works</h6>
        <h1 class="display-4 fw-800" style="color: #4a148c; font-weight: 800;">Portfolio<span style="color: #e91e63;">.</span></h1>
    </div>

    <div class="row g-4">
        @for($i = 1; $i <= 6; $i++)
        <div class="col-md-4 col-sm-6">
            <div class="portfolio-item position-relative overflow-hidden shadow-sm rounded-4">
                <img src="https://via.placeholder.com/600x400" class="img-fluid w-100" alt="Work {{ $i }}">
                <div class="portfolio-overlay d-flex align-items-center justify-content-center text-center p-3">
                    <div class="text-white">
                        <h5 class="fw-bold mb-1">Project Title {{ $i }}</h5>
                        <p class="small mb-2">Category Branding</p>
                        <a href="#" class="btn btn-sm btn-light rounded-pill px-3">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

<style>
    .portfolio-item img { transition: transform 0.5s ease; }
    .portfolio-item:hover img { transform: scale(1.1); }
    .portfolio-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(rgba(74, 20, 140, 0.9), rgba(233, 30, 99, 0.8));
        opacity: 0; transition: opacity 0.3s ease;
    }
    .portfolio-item:hover .portfolio-overlay { opacity: 1; }
</style>
@endsection