
@if ($datas->hasPages())
<div class="pagination-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="pagination_style">
                <nav>
                    @if ($datas->hasPages())
                    <ul class="pagination paginate">
                        {{-- Previous Page Link --}}
                        {{-- @if ($datas->onFirstPage())
                            <li class="page-item disabled" aria-current="page"><span class="page-link">«</span></li>
                        @else
                            <li class="page-item"><a href="{{ $datas->previousPageUrl() }}" rel="prev" class="page-link">«</a></li>
                        @endif --}}

                        @if($datas->currentPage() > 2)
                            <li class="page-item"><a class="page-link" href="{{ $datas->url(1) }}">1</a></li>
                        @endif
                        @if($datas->currentPage() > 3)
                            <li class="page-item"><span class="page-link">...</span></li>
                        @endif
                        @foreach(range(1, $datas->lastPage()) as $i)
                            @if($i >= $datas->currentPage() - 1 && $i <= $datas->currentPage() + 1)
                                @if ($i == $datas->currentPage())
                                    <li class="page-item active "><span class="page-link">{{ $i }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $datas->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endif
                        @endforeach
                        @if($datas->currentPage() < $datas->lastPage() - 2)
                            <li class="page-item"><span class="page-link">...</span></li>
                        @endif
                        @if($datas->currentPage() < $datas->lastPage() - 1)
                            <li class="page-item"><a href="{{ $datas->url($datas->lastPage()) }}" class="page-link">{{ $datas->lastPage() }}</a></li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($datas->hasMorePages())
                            <li class="page-item"><a href="{{ $datas->nextPageUrl() }}" rel="next" class="page-link"> {!! __("Next") !!} </a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link"> {!! __("Next") !!} </span></li>
                        @endif
                    </ul>
                @endif 
                </nav>
            </div>
        </div>
    </div>
</div>
@endif