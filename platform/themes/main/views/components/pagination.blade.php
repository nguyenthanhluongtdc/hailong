@php $posts =  get_all_posts();  @endphp
@if ($posts->hasPages())
<div class="pagination-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="pagination_style">
                <nav>
                    @if ($posts->hasPages())
                    <ul class="pagination paginate">
                        {{-- Previous Page Link --}}
                        @if ($posts->onFirstPage())
                            <li class="page-item disabled" aria-current="page"><span class="page-link">«</span></li>
                        @else
                            <li class="page-item"><a href="{{ $posts->previousPageUrl() }}" rel="prev" class="page-link">«</a></li>
                        @endif

                        @if($posts->currentPage() > 2)
                            <li class="page-item"><a class="page-link" href="{{ $posts->url(1) }}">1</a></li>
                        @endif
                        @if($posts->currentPage() > 3)
                            <li class="page-item"><span class="page-link">...</span></li>
                        @endif
                        @foreach(range(1, $posts->lastPage()) as $i)
                            @if($i >= $posts->currentPage() - 1 && $i <= $posts->currentPage() + 1)
                                @if ($i == $posts->currentPage())
                                    <li class="page-item active "><span class="page-link">{{ $i }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a></li>
                                @endif
                            @endif
                        @endforeach
                        @if($posts->currentPage() < $posts->lastPage() - 2)
                            <li class="page-item"><span class="page-link">...</span></li>
                        @endif
                        @if($posts->currentPage() < $posts->lastPage() - 1)
                            <li class="page-item"><a href="{{ $posts->url($posts->lastPage()) }}" class="page-link">{{ $posts->lastPage() }}</a></li>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($posts->hasMorePages())
                            <li class="page-item"><a href="{{ $posts->nextPageUrl() }}" rel="next" class="page-link">»</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">»</span></li>
                        @endif
                    </ul>
                @endif 
                </nav>
            </div>
        </div>
    </div>
</div>
@endif