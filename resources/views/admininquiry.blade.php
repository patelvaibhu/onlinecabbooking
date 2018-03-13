@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Inquiry</title>
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
    <link rel="stylesheet" type="text/css" href="asset/login/vendor/bootstrap/css/bootstrap.min.css">
    <link href="book/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="book/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
    <link rel="stylesheet" href="book/css/jquery-ui.css" />
    <!-- //css files -->

    <!-- online-fonts -->
    <!--//online-fonts -->
</head>
<body style="background-image:url('asset/images/book/car.jpg')">

<div class="w3-container w3-center w3-animate-zoom">

    <div class="header">

    </div>
    <div class="w3-main">
        <!-- Main -->
        <div class="about-bottom">
            <div class="w3l_about_bottom_right two">
                <h2 class="tittle"><img src="book/images/cab.png" alt=""><span>Inquiry</span></h2>
                <div class="book-form">
                    <form method="post"  action="{{Route('inquirystore')}}" >
                        {{csrf_field()}}
                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> Passenger Name:</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="passenger_name" placeholder="Passenger Name" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Admin name-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> Email :</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Email-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label>Contact No:</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="contact_no"  placeholder="Contact No" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--password-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> Message:</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="message" placeholder="Message" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Contact no-->

                        <div class="make">
                            <input type="submit" value="Book My Cab">
                        </div>
                        {{--</div><!--/box-->--}}


                    </form>

                </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
</body>
