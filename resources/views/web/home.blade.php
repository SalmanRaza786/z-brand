@extends('web.setup.master')
@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Our Products</h3>
                    </div>
                </div>
                <!-- /section title -->
                <div class="section">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
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
                                                                <span class="sale">{{number_format($per,0)}}%</span>
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category"></p>
                                                            <h3 class="product-name">
                                                                <a href="#">{{$pro->name}}</a></h3>
                                                            <h4 class="product-price">PKR {{number_format($pro->sale_price,2)}}
                                                                <del class="product-old-price">{{number_format($pro->price,2)}}</del></h4>
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
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                @isset($data['catwise'])
                    @foreach($data['catwise'] as $cat)
                        <div class="col-md-4 col-xs-6">
                            <div class="shop">
                                <a href="{{url('pro-cat/').'/'.encrypt($cat->id)}}">
                                    <div class="shop-img">
                                        <img src="{{asset('storage/app/public/products/').'/'.$pro->image}}" alt="Products">
                                    </div>
                                </a>
                                <div class="shop-body">
                                    <h3 class="product-name" style="color: white"><a href="#">{{$cat->name}}</a></h3>
                                    <a href="{{url('pro-cat/').'/'.encrypt($cat->id)}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <ul class="hot-deal-countdown">
                            <li>
                                <div>
                                    <h3>02</h3>
                                    <span>Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>10</h3>
                                    <span>Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>34</h3>
                                    <span>Mins</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>60</h3>
                                    <span>Secs</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">hot deal this week</h2>
                        <p>New Collection Up to 50% OFF</p>
                        <a class="primary-btn cta-btn" href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Top selling</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                @isset($data['topCatSale'])
                                    @foreach($data['topCatSale'] as $topCat)
                                        <li><a href="{{url('pro-cat').'/'.encrypt($topCat->id)}}">{{$topCat->cat_name}}</a></li>
                                    @endforeach
                                @endisset
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->
                @isset($data['topSale'])
                    @foreach($data['topSale'] as $topSale)
                        <div class="col-md-3 col-xs-6">
                            <a href="{{url('product-detail/').'/'.encrypt($topSale->id)}}">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{asset('storage/app/public/products/').'/'.$pro->image}}" alt="Products">
                                        <div class="product-label">
                                            @php
                                                $per=($topSale->sale_price*100) / $topSale->price;
                                            @endphp
                                            <span class="sale">{{number_format($per,0)}}%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"></p>
                                        <h3 class="product-name">
                                            <a href="{{url('product-detail/').'/'.encrypt($topSale->id)}}">{{$topSale->name}}</a></h3>
                                        <h4 class="product-price">PKR {{number_format($topSale->sale_price,2)}} <del class="product-old-price">{{number_format($topSale->price,2)}}</del></h4>
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="{{url('product-detail/').'/'.encrypt($topSale->id)}}">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Buy</button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endisset
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
