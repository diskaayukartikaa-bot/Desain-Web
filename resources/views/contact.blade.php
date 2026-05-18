@extends('app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="bg-white shadow rounded-4 overflow-hidden border-0 animate-fade-in">
                <div class="row g-0">
                    
                    <div class="col-md-5 p-5 text-white d-flex flex-column justify-content-between" style="background: linear-gradient(135deg, #4a148c, #e91e63);">
                        <div>
                            <h3 class="fw-bold mb-4" style="font-family: 'Poppins', sans-serif;">Let's Talk!</h3>
                            <p class="mb-5" style="font-family: 'Poppins', sans-serif; font-size: 0.9rem; opacity: 0.85; line-height: 1.6;">
                                Tertarik untuk bekerja sama? Silakan hubungi saya melalui formulir atau kontak di bawah ini.
                            </p>
                            
                            <div class="mb-4 d-flex align-items-center">
                                <i class="bi bi-geo-alt me-3 fs-4"></i>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 0.95rem;">Surabaya, Jawa Timur, Indonesia</span>
                            </div>
                            <div class="mb-4 d-flex align-items-center">
                                <i class="bi bi-envelope me-3 fs-4"></i>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 0.95rem;">diskaayukartikaa@gmail.com</span>
                            </div>
                            <div class="mb-4 d-flex align-items-center">
                                <i class="bi bi-instagram me-3 fs-4"></i>
                                <span style="font-family: 'Poppins', sans-serif; font-size: 0.95rem;">@dayyyka_</span>
                            </div>
                        </div>
                        
                        <div class="mt-5 pt-3 border-top border-white-10" style="font-family: 'Poppins', sans-serif; font-size: 0.75rem; opacity: 0.7;">
                            <i class="bi bi-clock-history me-1"></i> Available for remote WFA opportunities.
                        </div>
                    </div>

                    <div class="col-md-7 p-5 bg-white position-relative overflow-hidden">
                        
                        <div class="mb-4">
                            <h4 class="fw-bold text-purple mb-1" style="font-size: 1.4rem;"><i class="bi bi-chat-left-heart-fill me-2 text-pink"></i>Send a Message</h4>
                            <p class="text-muted small mb-0">Saya biasanya merespons dalam waktu kurang dari 24 jam.</p>
                        </div>

                        <form>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label text-muted text-uppercase fw-600 custom-label">Full Name</label>
                                    <input type="text" class="form-control custom-input" placeholder="Diska Ayu">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-muted text-uppercase fw-600 custom-label">Email Address</label>
                                    <input type="email" class="form-control custom-input" placeholder="name@email.com">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label text-muted text-uppercase fw-600 custom-label">Message</label>
                                <textarea class="form-control custom-input" rows="5" placeholder="Tell me about your project or career opportunity..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-lg w-100 text-white fw-600 btn-send-custom d-flex align-items-center justify-content-center gap-2">
                                <span>Send Message</span> <i class="bi bi-send-fill" style="font-size: 0.85rem;"></i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fw-600 { font-weight: 600; }
    .text-purple { color: #4a148c; }
    .text-pink { color: #e91e63; }
    .border-white-10 { border-color: rgba(255, 255, 255, 0.15) !important; }

    /* Label Form */
    .custom-label {
        font-family: 'Poppins', sans-serif !important;
        font-size: 0.7rem !important;
        letter-spacing: 1.5px;
        margin-bottom: 8px;
    }

    /* Input Fields */
    .custom-input {
        font-family: 'Poppins', sans-serif !important;
        font-size: 0.9rem !important;
        border: 1px solid transparent !important;
        background-color: #f8f9fa !important;
        padding: 14px 18px !important;
        border-radius: 12px !important;
        color: #4a148c !important;
        box-shadow: none !important;
        transition: all 0.25s ease-in-out;
    }
    
    .custom-input:focus {
        background-color: #ffffff !important;
        border-color: #9c27b0 !important;
        box-shadow: 0 0 0 4px rgba(156, 39, 176, 0.1) !important;
    }

    .custom-input::placeholder {
        color: #adb5bd !important;
        font-weight: 400 !important;
    }

    /* Tombol Submit Gradasi Interaktif */
    .btn-send-custom {
        font-family: 'Poppins', sans-serif !important;
        background: linear-gradient(45deg, #e91e63, #9c27b0) !important;
        border: none !important;
        border-radius: 12px !important;
        padding: 14px !important;
        font-size: 0.95rem !important;
        box-shadow: 0 4px 15px rgba(233, 30, 99, 0.2) !important;
        transition: all 0.3s ease !important;
    }

    .btn-send-custom:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 8px 25px rgba(233, 30, 99, 0.35) !important;
        filter: brightness(1.05);
    }

    /* Animasi Halus Saat Halaman Dimuat */
    .animate-fade-in {
        animation: fadeIn 0.6s ease-out forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection