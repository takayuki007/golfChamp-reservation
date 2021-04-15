@if ($paginator->hasPages())
<nav class="c-pager">
    <ul class="c-pagination">
        {{-- Previous Page Link --}}@cannot('update', Model::class)

        @endcannot
        @if ($paginator->onFirstPage())
        <li class="pre c-page-li">
            <a href="#" class="c-page-a" aria-label="@lang('pagination.previous')">
                <span class="c-page-span">&laquo;</span>
            </a>
        </li>
<!--        <li class="c-page-li disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">-->
<!--            <span class="c-page-span" aria-hidden="true">&laquo;</span>-->
<!--        </li>-->
        @else
        <li class="pre c-page-li">
            <a href="{{ $paginator->previousPageUrl() }}" class="c-page-a" aria-label="@lang('pagination.previous')">
                <span class="c-page-span">&laquo;</span>
            </a>
        </li>
<!--        <li class="c-page-li">-->
<!--            <a class="c-page-a text-success" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>-->
<!--        </li>-->
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="c-page-li">
            <span class="c-page-a">
                <span class="c-page-span">{{ $element }}</span>
            </span>
        </li>
<!--        <li class="c-page-li disabled" aria-disabled="true"><span class="c-page-span">{{ $element }}</span></li>-->
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="c-page-li">
            <span class="c-page-a active">
                <span class="c-page-span">{{ $page }}</span>
            </span>
        </li>
<!--        <li class="c-page-li active" aria-current="page"><span class="c-page-span bg-success border-success">{{ $page }}</span></li>-->
        @else
        <li class="c-page-li">
            <a href="{{ $url }}" class="c-page-a">
                <span class="c-page-span">{{ $page }}</span>
            </a>
        </li>
<!--        <li class="c-page-li"><a class="c-page-a text-success" href="{{ $url }}">{{ $page }}</a></li>-->
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="c-page-li next">
            <a href="{{ $paginator->nextPageUrl() }}" class="c-page-a">
                <span class="c-page-span">&raquo;</span>
            </a>
        </li>
<!--        <li class="c-page-li">-->
<!--            <a class="c-page-a text-success" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>-->
<!--        </li>-->
        @else
            <li class="c-page-li disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="c-page-a">
                    <span class="c-page-span" aria-hidden="true">&raquo;</span>
                </span>
            </li>
        @endif
    </ul>
</nav>
@endif
