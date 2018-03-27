
@extends('adminmain')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Update Order
                <small>Order Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="adminindex"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="order"><i class="fa fa-dashboard"></i>Order</a></li>
                <li class="active">Welcome Order</li>
            </ol>
        </section>

        <section class="content">
            <form method="post" action="{{Route('updateorder')}}">
                {{csrf_field()}}
                <input type="hidden" id="order_id" name="order_id" value="{{$order->order_id}}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <form>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Pick Up City </label>
                                        <select class="form-control" style="font-size: large" placeholder="Pick Up City" name="pickup_city" value="{{$order->pickup_city}}">
                                            <option>Vadodara</option>
                                            <option>Vasad</option>
                                            <option>Anand</option>
                                            <option>Ahemdabad</option>
                                        </select>

                                        <div class="form-group" style="font-size: x-large">
                                            <label>Drop City</label>
                                            <select class="form-control" style="font-size: large" placeholder="Drop City" name="drop_city"  value="{{$order->drop_city}}">
                                                <option>Vadodara</option>
                                                <option>Vasad</option>
                                                <option>Anand</option>
                                                <option>Ahemdabad</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="font-size: x-large">
                                            <label>Pick Up  Date</label>
                                            <input type="date" placeholder="Pick Up Date" name="pickup_date" class="form-control" style="font-size: large" value="{{$order->drop_city}}">

                                        </div>
                                        <div class="form-group" style="font-size: x-large">
                                            <label>Pick UP Address</label>
                                            <input type="text" placeholder="Pick Up Address" name="pickup_address" class="form-control" style="font-size: large" value="{{$order->drop_city}}">
                                        </div>
                                        <div class="form-group" style="font-size: x-large">
                                            <label>Drop Address</label>
                                            <input type="text" placeholder="Drop Address" name="drop_address" class="form-control" style="font-size: large" value="{{$order->drop_address}}">
                                        </div>
                                        <div class="form-group" style="font-size: x-large">
                                            <label>Car Id</label>
                                            <input type="text" placeholder="Car Id" name="car_id" class="form-control" style="font-size: large" value="{{$order->car_id}}">
                                        </div>
                                        <div class="form-group" style="font-size: x-large">
                                            <label>Price</label>
                                            <input type="text" placeholder="Price" name="price" class="form-control" style="font-size: large" value="{{$order->price}}">
                                        </div>
                                        <div class="form-group" style="font-size: x-large">
                                            <label>Driver Id</label>
                                            <input type="text" placeholder="Driver Id" name="driver_id" class="form-control" style="font-size: large" value="{{$order->driver_id}}">
                                        </div>
                                        <div class="form-group" style="font-size: x-large">
                                            <label>Payment Status</label>
                                            <input type="text" placeholder="Payment Status" name="payment_status" class="form-control" style="font-size: large"value="{{$order->payment_status}}">
                                        </div>
                                        <div align="center" >
                                            <button type="submit" class="btn btn-primary btn-lg">ORDER REGISTER</button>
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