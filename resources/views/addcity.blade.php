
{{--@extends('adminmain')--}}


{{--@section('content')--}}



    {{--<!-- Content Wrapper. Contains page content -->--}}
    {{--<div class="content-wrapper">--}}
        {{--<label>pickup city</label>--}}
        {{--<input type="text"  name="pickup_city" class="form-control" id="usr" placeholder="pickup City">--}}
        {{--<div class="form-group">--}}
            {{--<label for="sel1">Pickup City:</label>--}}
            {{--<select class="form-control" id="sel1">--}}
                {{--<option>Vadodara</option>--}}
                {{--<option>Vasad</option>--}}
                {{--<option>Anand</option>--}}
                {{--<option>Ahemdabad</option>--}}
            {{--</select>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--@endsection--}}







<!DOCTYPE html>
<html>
<head>
    <title>City</title>
    <!-- metatags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Sports Camp Registration Form a Flat Responsive Widget,Login form widgets, Sign up Web 	forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="admin/city/css/jquery-ui.css"/>
    <link href="admin/city/css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- //css files -->
</head>
<body style="background-image: url('admin/city/images/city.jpg')">
<h1>City</h1>
<div class="w3l-main">
    <div class="w3l-from">

        <form  method="post" action="{{Route('citystore')}}">
        {{csrf_field()}}

                <div class="clear"></div>
                <div class="pickupcity">
                    <label class="head">Pickup City<span class="w3l-star"> * </span></label>
                    <select class="form-control"  name="pickup_city" required="">
                        <option>Vadodara</option>
                        <option>Vasad</option>
                        <option>Anand</option>
                        <option>Ahemdabad</option>
                    </select>
                </div>
                <div class="pickupcity">
                    <label class="head">Drop City<span class="w3l-star"> * </span></label>
                    <select class="form-control" name="drop_city" required="">
                        <option>vadodara</option>
                        <option>Vasad</option>
                        <option>Anand</option>
                        <option>Ahemdabad</option>
                    </select>
                </div>
                <div class="clear"></div>

            <div class="w3l-num">
                <label class="head">PICK UP TIME<span class="w3l-star"> * </span></label>
                <input type="text"  name="pickup_time" placeholder="" required="">
            </div>
            <div class="w3l-date">
                <label class="head">PICK UP DATE<span class="w3l-star"> * </span></label>
                <div class="styled-input">
                    <input class="date" id="datepicker" name="pickup_date" type="text" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="">
                </div>
            </div>
            <div class="w3l-sym">
                <label class="head"  style=" margin: 0px -150px 10px">TRAVEL TYPE<span class="w3l-star"> * </span></label>
                <input type="text" name="travel_type" placeholder="" required=" "    style=" margin: 0px -150px 10px;">
            </div>

                <div class="btn">
                    <input type="submit" name="submit" value="Submit" style="background-color: #0a0a0a ;"/>
                </div>

            <div class="clear"></div>
        </form>
    </div>
</div>
<!-- Calendar -->
<script>
    $(function() {
        $( "#datepicker,#datepicker1" ).datepicker();
    });
</script>
<!-- //Calendar -->

</body>
</html>