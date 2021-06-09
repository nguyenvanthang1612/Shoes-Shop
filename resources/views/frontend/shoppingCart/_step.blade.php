<div class="row block none-padding-top">
        <div class="col-xs-12">

            <ul class="steps row">
                <li class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number {{ $step == 1 ? 'bg-blue': 'bg-grey' }}">
                        1
                    </div>
                    <span>
                        {{ __('Confirm') }}
                    </span>
                    {{ __('products list') }}

                    <span class="dir-icon hidden-xs">
                        <i class="icofont icofont-stylish-right {{ $step == 1 ? 'text-yellow': '' }}"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number {{ $step == 2 ? 'bg-blue': 'bg-grey' }}">
                        2
                    </div>
                    <span>
                        {{ __('Enter') }}
                    </span>
                    {{ __('your address') }}

                    <span class="dir-icon">
                        <i class="icofont icofont-stylish-right {{ $step == 2 ? 'text-yellow': '' }}"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number {{ $step == 3 ? 'bg-blue': 'bg-grey' }}">
                        3
                    </div>
                    <span>
                        {{ __('Confirm') }}
                    </span>
                    {{ __('order') }}
                </li>

                {{-- <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                    <div class="icon number bg-grey">
                        4
                    </div>
                    <span>
                        Confirm
                    </span>
                    your order
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- END: STEPS -->
