<div class="asside-nav bg-white hidden-xs">
    <div class="header text-uppercase text-white bg-blue">
        Category
    </div>

    <ul class="nav-vrt bg-white">
    @foreach($categories as $category)
        <li class="active">
            <a href="{{ route('product-categories-list', $category->id) }}" class="btn-material">
                {{$category->name_category}}
            </a>
        </li>
    @endforeach


    </ul>

</div><!-- / Asside nav -->
