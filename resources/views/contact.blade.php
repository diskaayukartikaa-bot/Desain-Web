@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="bg-white shadow rounded-4 overflow-hidden border-0">
                <div class="row g-0">
                    
                    <div class="col-md-5 p-5 text-white d-flex flex-column justify-content-between position-relative" style="background: linear-gradient(135deg, #4a148c, #e91e63);">
                        <div>
                            <h3 class="fw-800 display-6 mb-3 text-white">Let's Talk!</h3>
                            <p class="text-white-50 small mb-5" style="line-height: 1.6; font-weight: 300;">
                                Tertarik untuk bekerja sama? Silakan hubungi saya melalui formulir atau kontak di bawah ini.
                            </p>
                            
                            <div class="d-flex flex-column gap-4">
                                
                                <div class="d-flex align-items-center contact-item-interactive">
                                    <div class="contact-icon-wrapper me-3">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div>
                                        <span class="text-white-50 d-block text-uppercase fw-bold tracking-wider" style="font-size: 0.65rem;">Location</span>
                                        <strong class="text-white fs-6 font-layout">Surabaya, East Java, ID</strong>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center contact-item-interactive">
                                    <div class="contact-icon-wrapper me-3">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div>
                                        <span class="text-white-50 d-block text-uppercase fw-bold tracking-wider" style="font-size: 0.65rem;">Email Address</span>
                                        <strong class="text-white fs-6 font-layout">diskaayukartikaa@gmail.com</strong>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center contact-item-interactive">
                                    <div class="contact-icon-wrapper me-3">
                                        <i class="bi bi-instagram"></i>
                                    </div>
                                    <div>
                                        <span class="text-white-50 d-block text-uppercase fw-bold tracking-wider" style="font-size: 0.65rem;">Social Media</span>
                                        <strong class="text-white fs-6 font-layout">@dayyyka_</strong>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mt-5 text-white-50 small border-top border-white-10 pt-3" style="font-size: 0.75rem; font-weight: 300;">
                            <i class="bi bi-clock-history me-1"></i> Available for remote WFA opportunities.
                        </div>
                    </div>

                    <div class="col-md-7 p-5">
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-bold small text-muted text-uppercase tracking-wider" style="font-size: 0.75rem;">Full Name</label>
                                <input type="text" class="form-control form-control-lg border-0 bg-light rounded-3 font-layout" placeholder="Diska Ayu" style="font-size: 0.95rem; padding: 12px 15px;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small text-muted text-uppercase tracking-wider" style="font-size: 0.75rem;">Email Address</label>
                                <input type="email" class="form-control form-control-lg border-0 bg-light rounded-3 font-layout" placeholder="name@email.com" style="font-size: 0.95rem; padding: 12px 15px;">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold small text-muted text-uppercase tracking-wider" style="font-size: 0.75rem;">Message</label>
                                <textarea class="form-control border-0 bg-light rounded-3 font-layout" rows="4" placeholder="Tell me about your project..." style="font-size: 0.95rem; padding: 12px 15px;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg w-100 text-white fw-bold shadow-sm btn-submit-contact" style="background: #e91e63; border-radius: 12px; padding: 12px; font-size: 1rem; border: none; transition: all 0.3s ease;">
                                Send Message
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fw-800 { font-weight: 800; }
    .tracking-wider { letter-spacing: 0.12em; }
    .border-white-10 { border-color: rgba(255, 255, 255, 0.1) !important; }
    
    /* Memastikan font info dan input teks terasa tegas & bersih */
    .font-layout {
        font-family: 'Poppins', sans-serif !important;
    }

    /* Desain wadah ikon kotak melingkar transparan */
    .contact-icon-wrapper {
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.15rem;
        transition: all 0.3s ease;
    }

    /* Efek interaktif mikro pada baris info kontak */
    .contact-item-interactive {
        cursor: pointer;
        transition: transform 0.2s ease;
    }
    .contact-item-interactive:hover {
        transform: translateX(6px);
    }
    .contact-item-interactive:hover .contact-icon-wrapper {
        background: #fff;
        color: #e91e63;
        box-shadow: 0 8px 20px rgba(233, 30, 99, 0.25);
    }

    /* Efek Hover dinamis pada tombol submit form */
    .btn-submit-contact:hover {
        background: linear-gradient(45deg, #e91e63, #9c27b0) !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(233, 30, 99, 0.3) !important;
    }
</style>
@endsection