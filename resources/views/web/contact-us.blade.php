@extends('web.setup.master')
@section('content')



    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">

                            <h3 class="title"> <small style="color: #F7941D"> Get in touch </small> <br>
                               Write Us A Message </h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="first-name" placeholder=" Name">
                        </div>

                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Phone">
                        </div>
                    </div>
                    <!-- /Billing Details -->

                    <!-- Order notes -->
                    <div class="order-notes">
                        <textarea class="input" placeholder="Message"></textarea>
                    </div>


                    <div class="form-group">
                      <button class="primary-btn order-submit">Send</button>
                    </div>
                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->

                <div class="col-md-5 order-details" style="margin-top: 11rem">


                    <div class="order-summary">

                        <div class="order-products">
                            <div class="order-col">
                                <h4 class="title">Call us Now:</h4>
                                <div>+92-343-0056723</div>
                            </div>


                            <div class="order-col">
                                <h4 class="title">Email:</h4>
                                <div> zeebrandstore@gmail.com</div>
                            </div>

                        </div>

                        <div class="order-col">
                            <h4 class="title">Address:</h4>
                            <div><strong>Guldberg 3 Lahore Punjab Pakistan</strong></div>
                        </div>

                    </div>

                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>


@endsection
