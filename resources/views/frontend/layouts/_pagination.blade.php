<div class="row pagination-block hidden-xs">
    <div class="col-xs-12">

        <div class="wrap">

            <!-- Pagination -->
            <ul class="pagination">
                @if(!$paginator->onFirstPage())
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}">
                            <span><i class="icofont icofont-rounded-left"></i></span>
                        </a>
                    </li>
                @endif

                @for($i = 1; $i <= $paginator->lastPage(); $i++)
                    <li class="{{ $paginator->currentPage() == $i ? 'active' : '' }}"><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endfor

                @if($paginator->currentPage() !== $paginator->lastPage())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}">
                            <span><i class="icofont icofont-rounded-right"></i></span>
                        </a>
                    </li>
                @endif
            </ul>

            <!-- Switch style on shop item -->
            <ul class="swither">
                <li class="cols" data-display="grid">
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
                <li class="rows active" data-display="details">
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
            </ul>
        </div>

    </div>
</div>
