@extends('backend.layouts.app')

@section('title')
    Edit Product
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
      <!--Start Page Title-->
          <div class="page-title-box">
            <h4 class="page-title">Product</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li class="active">
                    Edit Product
                </li>
            </ol>
              <div class="clearfix"></div>
          </div>
            <!--End Page Title-->
      <!--Start row-->
      <div class="row">
          <div class="col-md-12">
            <div class="white-box">
              <h2 class="header-title">Edit Product</h2>

                  <form class="form-horizontal" action='{{ url("/admin/product/{$product->id}") }}' method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    {{-- name --}}
                    <div class="form-group">
                      <label class="col-md-2 control-label">Name</label>
                      <div class="col-md-10">
                        <input class="form-control" type="text" name="name" placeholder="name" value="{{ old('name',$product->name) }}">
                        @error('name')
                            <div class="text-danger">
                              <span>{{ $message }}</span>
                            </div>
                        @enderror
                      </div>
                    </div>

                    {{-- name category --}}
                    <div class="form-group">
                      <label class="col-md-2 control-label">Name Category</label>
                      <div class="col-md-10">
                        <select class="form-control" name="category_id">
                          @foreach ($categories as $category)
                              <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name_category }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    {{-- description --}}
                    <div class="form-group">
                      <label class="col-md-2 control-label">Description</label>

                      <div class="col-md-10">
                        <textarea id="ckeditor" cols="30" rows="10" name="desc" value="{{ $product->desc }}">{{ $product->desc }}</textarea>
                        @error('desc')
                          <div class="text-danger">
                            <span>{{ $message }}</span>
                          </div>
                        @enderror
                      </div>
                    </div>

                    {{-- SKU --}}
                    <div class="form-group">
                      <label class="col-md-2 control-label">SKU</label>
                      <div class="col-md-10">
                        <input class="form-control" type="text" name="SKU" placeholder="SKU" value="{{ $product->SKU }}">
                        @error('SKU')
                            <div class="text-danger">
                              <span>{{ $message }}</span>
                            </div>
                        @enderror
                      </div>
                    </div>

                    {{-- Size --}}
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Size</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="size">
                          <option value="35" {{ $product->size == 35 ? 'selected' : '' }}>35</option>
                          <option value="36" {{ $product->size == 36 ? 'selected' : '' }}>36</option>
                          <option value="37" {{ $product->size == 37 ? 'selected' : '' }}>37</option>
                          <option value="38" {{ $product->size == 38 ? 'selected' : '' }}>38</option>
                          <option value="39" {{ $product->size == 39 ? 'selected' : '' }}>39</option>
                          <option value="40" {{ $product->size == 40 ? 'selected' : '' }}>40</option>
                          <option value="41" {{ $product->size == 41 ? 'selected' : '' }}>41</option>
                          <option value="42" {{ $product->size == 42 ? 'selected' : '' }}>42</option>
                          <option value="43" {{ $product->size == 43 ? 'selected' : '' }}>43</option>
                        </select>
                      </div>
                    </div>

                    {{-- Brand --}}
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Brand</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="brand">
                          <option value="Nike" {{ $product->brand == 'Nike' ? 'selected' : '' }}>Nike</option>
                          <option value="Addidas" {{ $product->brand == 'Addidas' ? 'selected' : '' }}>Addidas</option>
                          <option value="Puma" {{ $product->brand == 'Puma' ? 'selected' : '' }}>Puma</option>
                          <option value="Gucci" {{ $product->brand == 'Gucci' ? 'selected' : '' }}>Gucci</option>
                          <option value="Converse" {{ $product->brand == 'Converse' ? 'selected' : '' }}>Converse</option>
                        </select>
                      </div>
                    </div>

                    {{-- quantity --}}
                    <div class="form-group">
                      <label class="col-md-2 control-label">Quantity</label>
                      <div class="col-md-10">
                          <input class="form-control" type="text" name="quantity" placeholder="quantity"
                          value="{{ old('quantity', $product->inventory->quantity) }} ">
                        @error('quantity')
                            <div class="text-danger">
                              <span>{{ $message }}</span>
                            </div>
                        @enderror
                      </div>
                    </div>

                    {{-- price --}}
                    <div class="form-group">
                      <label class="col-md-2 control-label">Price</label>
                      <div class="col-md-10">
                        <input class="form-control" type="text" name="price" placeholder="price" value="{{ old('price', $product->price) }}">
                        @error('price')
                            <div class="text-danger">
                              <span>{{ $message }}</span>
                            </div>
                        @enderror
                      </div>
                    </div>

                    {{-- Image --}}
                    <div class="form-group">
                      <div class="custom-file">
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <img src="{{ asset('storage/backend/product/'.$product->img) }}" style="width:220px; height:200px" />
                            <div class="fallback">
                              <input type="hidden" name="img" value="{{ $product->img }}" />
                              <input type="file" name="img" multiple>
                                @error('img')
                                  <div class="text-danger">
                                    <span>{{ $message }}</span>
                                  </div>
                                @enderror
                            </div>
                        </div>

                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-9">
                        <button class="btn btn-primary outline-btn">Submit</button>
                        <a href="{{ url('/admin/product') }}">
                          <button type="button" class="btn btn-danger outline-btn">Cancel</button>
                        </a>
                      </div>
                    </div>

                  </form>
            </div>
            </div>
        </div>
      <!--End row-->
    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection

