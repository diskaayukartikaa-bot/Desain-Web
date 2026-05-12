@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="bg-white shadow rounded-4 overflow-hidden border-0">
                <div class="row g-0">
                    <div class="col-md-5 p-5 text-white" style="background: linear-gradient(135deg, #4a148c, #e91e63);">
                        <h3 class="fw-bold mb-4">Let's Talk!</h3>
                        <p class="mb-5">Tertarik untuk bekerja sama? Silakan hubungi saya melalui formulir atau kontak di bawah ini.</p>
                        
                        <div class="mb-4 d-flex align-items-center">
                            <i class="bi bi-geo-alt me-3 fs-4"></i>
                            <span>Surabaya, Jawa Timur, Indonesia</span>
                        </div>
                        <div class="mb-4 d-flex align-items-center">
                            <i class="bi bi-envelope me-3 fs-4"></i>
                            <span>diskaayukartikaa@gmail.com</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-instagram me-3 fs-4"></i>
                            <span>@dayyyka_</span>
                        </div>
                    </div>
                    <div class="col-md-7 p-5">
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-bold small text-muted text-uppercase">Full Name</label>
                                <input type="text" class="form-control form-control-lg border-0 bg-light rounded-3" placeholder="Diska Ayu">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small text-muted text-uppercase">Email Address</label>
                                <input type="email" class="form-control form-control-lg border-0 bg-light rounded-3" placeholder="name@email.com">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold small text-muted text-uppercase">Message</label>
                                <textarea class="form-control border-0 bg-light rounded-3" rows="4" placeholder="Tell me about your project..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg w-100 text-white fw-bold shadow-sm" style="background: #e91e63; border-radius: 10px;">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection