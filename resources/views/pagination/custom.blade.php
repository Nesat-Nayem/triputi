@if ($paginator->hasPages())
<nav class="overflow-x-auto" style="overflow-x:auto">

    @if ($paginator->count() > 0)
    <p>
        Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} entries
    </p>
    @else
    <p>No entries found</p>
    @endif

    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">Previous</span>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}&search={{ request('search') }}" rel="prev">Previous</a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
        @endif

        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}&search={{ request('search') }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}&search={{ request('search') }}" rel="next">Next</a>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">Next</span>
        </li>
        @endif
    </ul>
</nav>
@endif
