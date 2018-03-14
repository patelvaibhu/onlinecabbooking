
@extends('adminmain')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              City
                <small>City Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Welcome City</li>
            </ol>
        </section>

        <section class="content">
            <form method="post" action="{{Route('citystore')}}">
                {{csrf_field()}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <form>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Pickup City</label>
                                        <input type="text" placeholder="pickup_city" name="pickup_city" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Drop City</label>
                                        <input type="text" placeholder="Drop City" name="drop_city" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Pickup Time</label>
                                        <input type="time" placeholder="Pickup Time" name="pickup_time" class="form-control" style="font-size: large">

                                        <div class="form-group" style="font-size: x-large">
                                            <label>Pick Up Date</label>
                                            <input type="date" placeholder="Pick Up Date" name="pickup_date" class="form-control" style="font-size: large">
                                        </div>
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Travel Type</label>
                                        <select class="form-control" style="font-size: large" placeholder="Travel Type" name="travel_type">
                                            <option>Petrol</option>
                                            <option>Diesel</option>
                                        </select>
                                    </div>
                                    <div align="center" >
                                        <button type="submit" class="btn btn-primary btn-lg">Book Now</button>
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