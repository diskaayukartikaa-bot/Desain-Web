@foreach($items as $item)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 p-3 bg-white" style="position: relative;">
            <div class="card-body d-flex flex-column justify-content-between p-2">
                <div>
                    <span class="badge bg-light-pink text-pink rounded-pill px-3 py-2 text-xs mb-3">
                        {{ $item->category->name ?? 'Film Production' }}
                    </span>
                    
                    <h5 class="fw-bold text-purple mb-2" style="font-size: 1.15rem; line-height: 1.4;">
                        {{ $item->title }}
                    </h5>
                    
                    <p class="text-muted small mb-4" style="line-height: 1.6;">
                        {{ Str::limit($item->desc, 90) }}
                    </p>
                </div>

                <div class="text-end mt-auto">
                    <a href="{{ route('portfolio.show', $item->id) }}" class="text-decoration-none fw-bold text-pink icon-link icon-link-hover">
                        Read details <span class="arrow" aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach