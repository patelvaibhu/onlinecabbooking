

<div class="page-wrapper">

    <!-- Preloader -->

    <!-- Main Header / Header Style One-->
    <header class="main-header header-style-one">

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="logo-outer">
                        <div class="logo"><a href="index"><img src="asset/images/logo7.png" alt="Valencia" title="Valencia"></a></div>
                    </div>

                    <div class="upper-right clearfix">

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="icon-box"><span class="flaticon-buildings"></span></div>
                            <ul>
                                <li><strong>Visit Us:</strong></li>
                                <li>123A, Mainbridge, USA</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="info-box">
                            <div class="icon-box"><span class="flaticon-technology-5"></span></div>
                            <ul>
                                <li><strong>Call Us:</strong></li>
                                <li>+1800 - 2374 - 1900</li>
                            </ul>
                        </div>

                        <div class="info-box">
                            <div class="icon-box"><span class="flaticon-envelope"></span></div>
                            <ul>
                                <li><strong>Mail Us:</strong></li>
                                <li>valencia@support.com</li>
                            </ul>
                        </div>

                        <div class="info-box btn-box">
                            <a href="booking" class="theme-btn">Bookings</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Header-Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="index">Home</a>
                                    <ul>
                                        <li><a href="index">Homepage One</a></li>
                                        {{--<li><a href="index-2">Homepage Two</a></li>--}}

                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href={{Route('index')}}>Header Style One</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li><a href="booking">Booking Now</a></li>
                                <li><a href="aboutus">About Us</a></li>
                                <li class="dropdown"><a href="#">Our Cars</a>
                                    <ul>
                                        <li><a href="cars">Our Cars</a></li>
                                        {{--<li><a href="car-single.html">Car Single</a></li>--}}
                                        {{--<li><a href="booking.html">Book a Car</a></li>--}}
                                        {{--<li><a href="confirmation.html">Confirmation</a></li>--}}

                                    </ul>
                                </li>
                                <li><a href="contactus">Contact</a></li>
                                <li><a href="login">login</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Social Links-->
                    <div class="social-links">
                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                    </div>

                </div>
            </div>
        </div>


        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="asset/images/logo7.png" alt="Valencia" title="Valencia"></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home Kari</a>
                                    <ul>
                                        <li><a href="index">Homepage One</a></li>
                                        {{--<li><a href="index-2.html">Homepage Two</a></li>--}}
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index">Header Style One</a></li>
                                                {{--<li><a href="index-2.html">Header Style Two</a></li>--}}
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="{{Route('booking')}}">Booking now</a></li>
                                <li><a href="aboutus">About Us</a></li>
                                <li class="dropdown"><a href="#">Our Cars</a>
                                    <ul>
                                        <li><a href="cars">Our Cars</a></li>
                                        {{--<li><a href="car-single.html">Car Single</a></li>--}}
                                        {{--<li><a href="booking.html">Book a Car</a></li>--}}
                                        {{--<li><a href="confirmation.html">Confirmation</a></li>--}}

                                    </ul>
                                </li>
                                <li><a href="contactus">Contact</a></li>
                                <li><a href="{{Route('login')}}">login</a></li>

                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div><!--End Sticky Header-->

    </header>