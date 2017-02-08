@if ($paginator->lastPage() > 1)
    <div class="pagination wow fadeInUp">    
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? ' current' : '' }}  page-numbers">{{ $i }}</a>
        @endfor
    </div>
@endif