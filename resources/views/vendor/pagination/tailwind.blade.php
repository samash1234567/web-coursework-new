@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="display-paginate">
            @if ($paginator->onFirstPage())
                <span class="display-previous">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="display-previous">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="display-previous">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="display-previous">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="display-paginate">
            <div>
                <p class="display-previous">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="display-previous">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="display-previous">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="display-previous">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>


        </div>
    </nav>
@endif
