
@extends('web.setup.master')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">



        <div class="row">


            <div id="store" class="col-md-12">

                <!-- store products -->
                <div class="row">

                    @isset($data['products'])
                        @foreach($data['products'] as $pro)
                            <div class="col-md-3 col-xs-6">
                                <a href="{{url('product-detail/').'/'.encrypt($pro->id)}}">
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{asset('assets/uploads/').'/'.$pro->image}}" alt="">
                                            <div class="product-label">
                                                <span class="sale">-30%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>

                                        <div class="product-body">
                                            <p class="product-category">{}</p>
                                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>

                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Buy</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endisset
                    <div class="clearfix visible-sm visible-xs"></div>




                </div>

            </div>
            <!-- /STORE -->
        </div>
    </div>
    <!-- /container -->
</div>

@endsection
