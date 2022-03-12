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



                                                        <img src="{{asset('storage/app/public/products/').'/'.$pro->image}}" alt="Products">
                                                        <div class="product-label">

                                                            @php
                                                                $per=($pro->sale_price*100) / $pro->price;
                                                            @endphp
                                                            <span class="sale">-{{number_format($per,0)}}%</span>
                                                            <span class="new">NEW</span>
                                                        </div>
                                                    </div>

                                                    <div class="product-body">
                                                        <p class="product-category"></p>
                                                        <h3 class="product-name"><a href="#">{{$pro->name}}</a></h3>
                                                        <h4 class="product-price">PKR {{number_format($pro->sale_price,2)}} <del class="product-old-price">{{number_format($pro->price,2)}}</del></h4>

                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a href="{{url('product-detail/').'/'.encrypt($pro->id)}}">
                                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Buy</button>
                                                        </a>
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
