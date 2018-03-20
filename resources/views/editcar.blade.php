
@extends('adminmain')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Car
                <small>Edit Car</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Welcome Car</li>
            </ol>
        </section>

        <section class="content">
            <form method="post" action="{{Route('updatecar')}}">
                {{csrf_field()}}
                <input type="hidden" id="car_id" name="car_id" value="{{$car->id}}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                {{--<form>--}}

                                    <div class="form-group" style="font-size: x-large">
                                        <label>City Name</label>
                                        <input type="text" placeholder="City Name" name="city_name" class="form-control" style="font-size: large" value="{{$car->city_name}}">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Location</label>
                                        <input type="text" placeholder="Location" name="location" class="form-control" style="font-size: large" value="{{$car->location}}">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Date Time</label>
                                        <input type="datet" placeholder="Date Time" name="datetime" class="form-control" style="font-size: large" value="{{$car->datetime}}">

                                    </div>
                                    <div align="center" >
                                        <button type="submit" class="btn btn-primary btn-lg">SAVE</button>
                                        {{--<button type="button" class="btn btn-block btn-primary btn-flat">Primary</button>--}}
                                    </div>

                                {{--</form>--}}

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