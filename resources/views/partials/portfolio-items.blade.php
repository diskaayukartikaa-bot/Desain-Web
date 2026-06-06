@php
    // Memastikan variabel $items tersedia sebagai array agar tidak memicu crash runtime
    $items = $items ?? [];

    // Filter data berdasarkan kategori tab aktif jika parameter filter dikirim
    if (isset($filter) && !empty($items)) {
        $items = array_filter($items, function($item) use ($filter) { 
            return $item['category'] === $filter; 
        });
    }
@endphp

@foreach($items as $item)
<div class="col-md-4 mb-4">
    <a href="{{ route('portfolio.show', $item['id']) }}" class="card portfolio-card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-decoration-none" style="display: block;">
        <div class="card-body p-4 d-flex flex-column justify-content-between">
            <div>
                <span class="badge bg-light-{{ $item['color'] ?? 'pink' }} rounded-pill mb-3 px-3 py-2 text-xs fw-semibold">
                    {{ $item['badge'] }}
                </span>
                
                <h5 class="card-title fw-bold text-purple mb-2" style="font-size: 1.15rem; line-height: 1.4;">
                    {{ $item['title'] }}
                </h5>
                
                <p class="card-text text-muted small mb-0" style="line-height: 1.6;">
                    {{ $item['desc'] }}
                </p>
            </div>
            
            <div class="mt-4 pt-2 border-top border-light text-end">
                <span class="text-pink small fw-bold">Read details →</span>
            </div>
        </div>
    </a>
</div>
@endforeach