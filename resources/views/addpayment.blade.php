{{--@section('content')--}}

        {{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<title>Payment</title>--}}
    {{--<!-- Meta tag Keywords -->--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}

    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--}}
    {{--<meta name="keywords" content="Cab Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />--}}
    {{--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);--}}
        {{--function hideURLbar(){ window.scrollTo(0,1); } </script>--}}
    {{--<!-- Meta tag Keywords -->--}}

    {{--<!-- css files -->--}}
    {{--<link rel="stylesheet" type="text/css" href="asset/login/vendor/bootstrap/css/bootstrap.min.css">--}}
    {{--<link href="book/css/style.css" rel="stylesheet" type="text/css" media="all">--}}
    {{--<link href="book/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />--}}
    {{--<link rel="stylesheet" href="book/css/jquery-ui.css" />--}}
    {{--<!-- //css files -->--}}

    {{--<!-- online-fonts -->--}}
    {{--<!--//online-fonts -->--}}
{{--</head>--}}
{{--<body style="background-image:url('asset/images/book/car1.jpg')">--}}

{{--<div class="w3-container w3-center w3-animate-zoom">--}}

    {{--<div class="heade1">--}}

    {{--</div>--}}
    {{--<div class="w3-main">--}}
        {{--<!-- Main -->--}}
        {{--<div class="about-bottom">--}}
            {{--<div class="w3l_about_bottom_right two">--}}
                {{--<h2 class="tittle"><img src="book/images/cab.png" alt=""><span>Payment</span></h2>--}}
                {{--<div class="book-form">--}}
                    {{--<form action="{{Route('paymentstore')}}" method="post">--}}
                    {{--{{csrf_field()}}--}}
                        {{--<div class="form-date-w3-agileits">--}}
                            {{--<div class="form-agileits">--}}
                                {{--<label>Car Name:</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-agileits-2">--}}
                            {{--</div>--}}
                            {{--<div class="clear"> </div>--}}
                        {{--</div>--}}
                        {{--<!--full name-->--}}

                        {{--<div class="form-date-w3-agileits">--}}
                            {{--<div class="form-agileits">--}}
                                {{--<label> Email :</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-agileits-2">--}}
                                {{--<input type="email" name="email" placeholder="Email" required="">--}}
                            {{--</div>--}}
                            {{--<div class="clear"> </div>--}}
                        {{--</div>--}}
                        {{--<!--Email-->--}}

                        {{--<div class="form-date-w3-agileits">--}}
                            {{--<div class="form-agileits">--}}
                                {{--<label> Amount:</label>--}}
                            {{--</div>--}}
                            {{--<div class="form-agileits-2">--}}
                                {{--<input type="text" name="amount" placeholder="Amount" required="">--}}
                            {{--</div>--}}
                            {{--<div class="clear"> </div>--}}
                        {{--</div>--}}
                        {{--<!--password-->--}}

                        {{--<div class="make">--}}
                            {{--<input type="submit" value="Add Payment">--}}
                        {{--</div>--}}
                        {{--</div><!--/box-->--}}


                    {{--</form>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clear"> </div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--</body>--}}


{{--<label>Tolltax</label>--}}
{{--<input type="text" class="form-control"  name="tolltax" id="usr" placeholder="Toll Tax">--}}
{{--<div align="center">--}}
{{--<button type="submit" class="btn btn-info">ADD PLAN</button>--}}


@extends('adminmain')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Payment
                <small>payment Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="adminindex"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="order"><i class="fa fa-dashboard"></i>payment</a></li>
                <li class="active">Welcome payment</li>
            </ol>
        </section>

        <section class="content">
            <form method="post" action="{{Route('paymentstore')}}">
                {{csrf_field()}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <form>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Car Name</label>
                                        <input type="text" placeholder="Car Name" name="car_name" class="form-control"  required="" style="font-size: large">

                                    </div>

                                    <div class="form-group" style="font-size: x-large">
                                        <label>Email</label>
                                        <input type="text" placeholder="Email" name="email" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Amount</label>
                                        <input type="text" placeholder="Amount" name="amount" class="form-control" style="font-size: large">
                                    </div>
                                    <div align="center" >
                                        <button type="submit" class="btn btn-primary btn-lg">ADD PAYMENT</button>
                                        {{--<button type="button" class="btn btn-block btn-primary btn-flat">Primary</button>--}}
                                    </div>

                                </form>

                                <div class="col-md-2">

                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div class="box-body" style="font-size: large">--}}

                    {{--</div>--}}
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>


@endsection