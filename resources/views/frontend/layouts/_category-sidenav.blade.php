<div class="asside-nav bg-white hidden-xs">
    <div class="header text-uppercase text-white bg-blue">
        {{ __('Category') }}
    </div>

    <ul class="nav-vrt bg-white">
    @foreach($categories as $category)
        <li class="active">
            <a href="{{ route('frontend.category-product.index', $category->id) }}" class="btn-material">
                {{$category->name_category}}
            </a>
        </li>
    @endforeach


    </ul>

</div><!-- / Asside nav -->
