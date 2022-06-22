 {{-- <div class="mainRigh_pagipage">
                    <p class="pagipage_number"><a href="">1</a></p>
                    <p class="pagipage_number"><a href="">1</a></p>
                    <p class="pagipage_number"><a href="">1</a></p>
                    <p class="pagipage_number"><a href=""><i class="fas fa-chevron-right"></i></a></p>
                </div> --}}



                @if ($paginator->hasPages())
                <div class="mainRigh_pagipage">
                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <p class="disabled pagipage_number" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                <span aria-hidden="true">&lsaquo;</span>
                            </p>
                        @else
                            <p class="pagipage_number">
                                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                            </p>
                        @endif
            
                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <P class="disabled pagipage_number" aria-disabled="true"><span>{{ $element }}</span></P>
                            @endif
            
                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <P class="active pagipage_number" aria-current="page"><span>{{ $page }}</span></P>
                                    @else
                                        <P class="pagipage_number"><a href="{{ $url }}">{{ $page }}</a></P>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
            
                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <P class="pagipage_number">
                                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                            </P>
                        @else
                            <P class="disabled pagipage_number" aria-disabled="true" aria-label="@lang('pagination.next')">
                                <span aria-hidden="true">&rsaquo;</span>
                            </P>
                        @endif
                    </div>
            @endif
            