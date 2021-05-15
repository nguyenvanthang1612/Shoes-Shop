@extends('backend.layouts.app')

@section('title')
    Create Product
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
              <!--Start Page Title-->
                {{-- <div class="white-box"> --}}
                  <div class="page-title-box">
                      <h4 class="page-title">Form Basic</h4>
                      <ol class="breadcrumb">
                          <li>
                              <a href="#">Dashboard</a>
                          </li>
                          <li>
                              <a href="#">Account</a>
                          </li>
                          <li class="active">
                              Create Product
                          </li>
                      </ol>
                      <div class="clearfix"></div>
                  </div>
                {{-- </div> --}}
                  <!--End Page Title-->          
           
           
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Select Fields</h2>
                       
                        <form class="form-horizontal" action="{{ url('admin/product') }}" method="POST" enctype="multipart/form-data">
                          
                          @csrf
                          {{-- name --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="name" placeholder="name" value="{{ old('name') }}">
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
                                    <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          {{-- description --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Description</label>
                            
                            <div class="col-md-10">
                              <textarea id="ckeditor" cols="30" rows="10" name="desc" value="{{ old('desc') }}"></textarea>
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
                              <input class="form-control" type="text" name="SKU" placeholder="SKU" value="{{ old('SKU') }}">
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
                                <option value="37">37</option>
                                <option value="38">38</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                              </select>
                            </div>
                          </div>

                          {{-- Brand --}}
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Brand</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="brand">
                                <option value="Nike">Nike</option>
                                <option value="Addidas">Addidas</option>
                                <option value="Puma">Puma</option>
                                <option value="Gucci">Gucci</option>
                                <option value="Thượng Đình">Thượng Đình</option>
                              </select>
                            </div>
                          </div>

                          {{-- quantity --}}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Quantity</label>
                            <div class="col-md-10">
                              <input class="form-control" type="text" name="quantity" placeholder="quantity" value="{{ old('quantity') }}">
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
                              <input class="form-control" type="text" name="price" placeholder="price" value="{{ old('price') }}">
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
                                  <div class="fallback">
                                    <input type="file" class="custom-file-input" id="customFile" name="img">
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
                              <a href="{{ url('/admin/categories') }}">
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

