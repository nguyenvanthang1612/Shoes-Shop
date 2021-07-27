<div class="container-fluid">
    <div class="row">
        <div class="clearfix">
            <div class="owl-carousel slideshow">
                <!-- Item -->
                @foreach($latestProducts as $product)
                <div class="item">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-12 col-md-5 hidden-xs hidden-sm">

                                <!-- Header -->
                                <h4 class="header text-uppercase text-blue">{{$product->name}}</h4>
                                <h2>{{$product->category->name_category}}</h2>

                                <!-- Text -->
                                <p>
                                    {!! $product->desc !!}
                                </p>

                                <!-- Buttons -->
                                <span class="btn-panel">

                                    <span class="sdw-wrap">
                                        <a href="{{ route('frontend.product.show', $product->id) }}" class="sdw-hover btn btn-lg btn-material btn-default"><span class="body">{{ __('More info') }}</span></a>
                                        <span class="sdw"></span>
                                    </span>

                                    <span class="hor-divider"></span>

                                    <span class="sdw-wrap">
                                        <a onclick='addCart("{{$product->id}}")'  href="javascript:" class="sdw-hover btn btn-lg btn-material btn-primary"><i class="icon icofont icofont-basket"></i><span class="body">{{ __('Buy now') }}</span></a>
                                        <span class="sdw"></span>
                                    </span>
                                </span>
                           </div>

                           <div class="col-xs-10 col-xs-offset-1 col-md-7 col-md-offset-0">

                               <!-- Image -->
                               <div class="img">
                                   <img src='{{ asset('storage/backend/product/'.$product->thumbnail) }}' alt="" >
                               </div>

                               <!-- Badge -->
                               <span class="sale-badge bg-green text-uppercase">
                                   new
                               </span>

                               <!-- Price -->
                               <span class="price hidden-xs">
                                   <span class="wrap text-red">
                                       {{$product->price}} $
                                   </span>
                               </span>

                               <!-- Mobile button -->
                               <span class="text-center visible-xs">
                                    <span class="sdw-wrap">
                                        <a href="#" class="sdw-hover btn btn-lg btn-material btn-primary"><i class="icon icofont icofont-basket"></i><span class="body">$254<small>.50</small></span></a>
                                        <span class="sdw"></span>
                                    </span>
                               </span>


                           </div>
                       </div>
                   </div>
                </div>
                @endforeach




            </div>
        </div>
    </div>
</div>
