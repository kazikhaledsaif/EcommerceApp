@if ($paginator->hasPages())
    <div class="pagination-container mt-50 pb-20 mb-md-80 mb-sm-80">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 text-center text-md-left mb-sm-20">
                <!--=======  showing result text  =======-->


                <p class="show-result-text">Showing  {{ $paginator->currentPage() * $paginator->perPage() -1 }} -   {{ $paginator->lastItem()  }} of {{ $paginator->total()  }}  item(s)</p>

                <!--=======  End of showing result text  =======-->
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <!--=======  pagination-content  =======-->
                <div class="pagination-content text-center text-md-right">
                    <ul>
                        @if ($paginator->onFirstPage())
                            <li class="  disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                <i class="fa fa-angle-left"></i> Previous</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class=" " href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                                    <i class="fa fa-angle-left"></i> Previous</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <li class=" disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li><a class="active" href="#">{{ $page }}</a></li>
                                    @else
                                        <li><a href="{{ $url }}"> {{ $page }} </a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li class="ml-2"><a href="{{ $paginator->nextPageUrl() }}">Next <i class="fa fa-angle-right"></i>  </a></li>
                        @else

                            <li class="ml-2 disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                Next <i class="fa fa-angle-right"></i>
                            </li>
                        @endif


                    </ul>
                </div>

            </div>
        </div>
    </div>

@endif
