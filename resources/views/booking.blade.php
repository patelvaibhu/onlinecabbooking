@extends('mainlayout')

@section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Cab Booking Form Responsive Widget Template :: W3layouts</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Cab Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Meta tag Keywords -->

        <!-- css files -->
        <link href="book/css/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="book/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
        <link rel="stylesheet" href="book/css/jquery-ui.css" />
        <!-- //css files -->

        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
        <!--//online-fonts -->
    </head>
    <body>
    <div class="w3-container w3-center w3-animate-zoom">

    <div class="header">

        </div>

        <div class="w3-main">
            <!-- Main -->
            <div class="about-bottom">
                <div class="w3l_about_bottom_right two">
                    <h2 class="tittle"><img src="book/images/cab.png" alt=""><span>Book Cab Now</span></h2>
                    <div class="book-form">

                        <form action="#" method="post">
                            <div class="form-date-w3-agileits">
                                <div class="form-agileits">
                                    <label> Name :</label>
                                </div>
                                <div class="form-agileits-2">
                                    <input type="text" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="clear"> </div>
                            </div>




                            <div class="form-date-w3-agileits">
                                <div class="form-agileits">
                                    <label>Pickup Date :</label>
                                </div>
                                <div class="form-agileits-2">
                                    <input type="date" style="background-color:black ; border-color: #ffffff ; width: 90%;  height: auto;" id="datepicker" name="pickup_date" value="yyyy/mm/dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                                </div>
                                <div class="clear"> </div>
                            </div>



                            <div class="form-date-w3-agileits">
                                <div class="form-agileits">
                                    <label> Pickup Location :</label>
                                </div>
                                <div class="form-agileits-2">
                                    <input type="text" name="pickup_location" placeholder="Enter an origin location" required="">
                                </div>
                                <div class="clear"> </div>
                            </div>
                            <div class="form-date-w3-agileits">
                                <div class="form-agileits">
                                    <label> Drop Location :</label>
                                </div>
                                <div class="form-agileits-2">
                                    <input type="text" name="drop_location" placeholder="Enter a destination location" required="">
                                </div>
                                <div class="clear"> </div>
                            </div>
                            <div class="form-date-w3-agileits second-agile">
                                <div class="form-agileits">
                                    <label> Email Address :</label>
                                </div>
                                <div class="form-agileits-2">
                                    <input type="email" name="email_address" placeholder="Enter a email Address" required="">
                                </div>
                                <div class="clear"> </div>
                            </div>
                            <div class="form-date-w3-agileits second-agile">
                                <div class="form-agileits">
                                    <label> Contact No:</label>
                                </div>
                                <div class="form-agileits-2">
                                    <input type="text" name="contact_no" placeholder="Your contact Number" required="">
                                </div>
                                <div class="clear"> </div>
                            </div>
                            <div class="form-date-w3-agileits">
                                {{--<div class="form-agileits">--}}
                                {{--<label>Pickup Time :</label>--}}
                                {{--</div>--}}
                                {{--<div class="form-agileits-2">--}}
                                {{--<input type="time" id="timepicker" name="pickup_time" class="timepicker form-control" value="Hrs:Min">--}}
                                {{--</div>--}}
                                <div class="clear"> </div>
                            </div>
                            <div class="make">
                                <input type="submit" value="Book My Cab">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    <!-- //Main -->

    <!-- footer -->
    </div>
    </body>

@endsection