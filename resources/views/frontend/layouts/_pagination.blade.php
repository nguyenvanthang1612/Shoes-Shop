<div class="row pagination-block hidden-xs">
    <div class="col-xs-12">

        <div class="wrap">

            <!-- Pagination -->
            <ul class="pagination">

                <li>
                    <a href="#">
                        <span><i class="icofont icofont-rounded-left"></i></span>
                    </a>
                </li>

                @for($i = 1; $i <= $paginator->lastPage(); $i++)
                    <li class="{{ $paginator->currentPage() == $i ? 'active' : '' }}"><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endfor
                <li>
                    <a href="#">
                        <span><i class="icofont icofont-rounded-right"></i></span>
                    </a>
                </li>

            </ul>

            <!-- Switch style on shop item -->
            <ul class="swither">
                <li class="cols">
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
                <li class="rows active">
                    <span></span>
                    <span></span>
                    <span></span>
                </li>
            </ul>
        </div>

    </div>
</div>
