
<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->

<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>
                        <p>
                            ZeeBrand.pk is a Zero investment business idea. Founded in 2017
                            ZeeBrands.pk set out itself to be a leading shopping website in Pakistan.
                            We mainly deal in cosmetics like Hair color shampoo,Hair remover spray hair care oil.

                        </p>
                        <ul class="footer-links">

                            <li><a href="https://api.whatsapp.com/send?phone=923430056723"><i class="fa fa-phone"></i>+92-343-0056723</a></li>
                            <li><a href="zeebrandstore@gmail.com
"><i class="fa fa-envelope-o"></i>zeebrandstore@gmail.com
                                </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            @php
                            $cat=App\Models\Category::all();
                            @endphp
                           @isset($cat)
                               @foreach($cat as $cat)
                            <li><a href="{{url('pro-cat').'/'.encrypt($cat->id)}}">{{$cat->cat_name}}</a></li>
                                @endforeach
                               @endisset

                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a href="{{url('about-us')}}">About Us</a></li>
                            <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">

                    <span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Powered  By <a href="https://www.linkedin.com/in/salman-raza-006a91155/" target="_blank" style="color:white">Salman Raza</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/js/slick.min.js')}}"></script>
<script src="{{asset('public/assets/js/nouislider.min.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('public/assets/js/main.js')}}"></script>

</body>
</html>
