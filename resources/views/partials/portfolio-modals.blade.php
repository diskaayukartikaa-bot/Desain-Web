@php
$modalIds = ['film-nasional', 'film-judol', 'film-av', 'yearbook', 'mmbfest-2025', 'siniar-pens', 'creative-agency', 'jawapos', 'trainer-kemen', 'trainer-flashcom', 'hima-mmb', 'mc-events', 'campus-expo', 'pkm-center', 'lsp-cert', 'its-bizcase', 'technogear', 'mmbfest-2024'];
@endphp

@foreach($modalIds as $id)
<div class="modal fade" id="modal-{{ $id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow-lg">
            <div class="modal-header border-0 p-3 pb-0 justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4 text-center">
                <i class="bi bi-journal-bookmark-fill text-pink display-4 mb-3"></i>
                <h4 class="fw-bold text-purple mb-3">Case Study Detail</h4>
                <p class="text-muted small mb-4">
                    Teks deskripsi lengkap mengenai tantangan, proses pengerjaan, dan output dari aktivitas <strong>{{ str_replace('-', ' ', strtoupper($id)) }}</strong> Anda sedang siap diisi melalui file partials Laravel.
                </p>
                <button type="button" class="btn btn-secondary rounded-pill px-4 btn-sm" data-bs-dismiss="modal">Close Architecture</button>
            </div>
        </div>
    </div>
</div>
@endforeach