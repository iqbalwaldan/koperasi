@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{-- First Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link">First</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url(1) }}" rel="first">First</a>
                </li>
            @endif

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array of Links --}}
                @if (is_array($element))
                    @php
                        $pagesToShow = 3;
                        $startPage = max(1, $paginator->currentPage() - 1);
                        $endPage = min($paginator->lastPage(), $startPage + $pagesToShow - 1);
                    @endphp

                    @foreach ($element as $page => $url)
                        @if ($page >= $startPage && $page <= $endPage)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link">Next</span></li>
            @endif

            {{-- Last Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="last">Last</a>
                </li>
            @else
                <li class="page-item disabled"><span class="page-link">Last</span></li>
            @endif
        </ul>
    </nav>
@endif
<style>
    .page-link {
        color: hsla(184, 37%, 31%, 1);
    }

    .page-link:hover {
        color: hsla(184, 37%, 31%, 1);
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: hsla(184, 37%, 31%, 1);
        border-color: hsla(184, 37%, 31%, 1);
    }

    .page-link:focus,
    .page-link:focus-visible {
        box-shadow: none;
        color: hsla(184, 37%, 31%, 0.8);
    }
</style>