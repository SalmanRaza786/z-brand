
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">

            <ul class="header-links pull-left">

                <li><a href="{{url('/')}}">   <h3 style="color: white"> ZeeBrand</h3></a></li>
                <li><a href="#"><i class="fa fa-phone"></i> +92-343-0056723</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> zeebrandstore@gmail.com</a></li>

            </ul>
<div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="header-search">
                    <form>
                        <select class="input-select">
                            <option value="0">All Categories</option>
                            <option value="1">Cat</option>
                            <option value="1">Category 02</option>
                        </select>
                        <input class="input" placeholder="Search here">
                        <button class="search-btn">Search</button>
                    </form>
                </div>
            </div>


        </div>


    </div>
    <!-- /TOP HEADER -->

</header>
<!-- /HEADER -->



<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                @isset($data['cat'])
                    @foreach($data['cat'] as $cat)
                        <li><a href="{{url('pro-cat').'/'.encrypt($cat->id)}}">{{$cat->cat_name}}</a></li>
                    @endforeach
                @endisset

            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
