@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Driver</title>
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

    <div class="heade1">

    </div>
    <div class="w3-main">
        <!-- Main -->
        <div class="about-bottom">
            <div class="w3l_about_bottom_right two">
                <h2 class="tittle"><img src="book/images/cab.png" alt=""><span>Driver</span></h2>
                <div class="book-form">
                    <form method="post" action="{{Route('driverstore')}}" >
                        {{csrf_field()}}

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> Full Name:</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="full_name" placeholder="Full Name" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Car-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> License No :</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="license_no" placeholder="License No" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--license-->
                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> AdharCard No :</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="adharcard_no" placeholder="AdharCard No" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Adhar No-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> Election Card :</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="election_card" placeholder="Election Card" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Election card-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label>Address :</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="address" placeholder="Address" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Address-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label> City :</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="city" placeholder="City" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--City-->

                        <div class="form-date-w3-agileits">
                            <div class="form-agileits">
                                <label>Contact No:</label>
                            </div>
                            <div class="form-agileits-2">
                                <input type="text" name="contact_no" placeholder="Contact No" required="">
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <!--Adhar No-->

                        <div class="make">
                            <input type="submit" value="Add Driver Details">
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
