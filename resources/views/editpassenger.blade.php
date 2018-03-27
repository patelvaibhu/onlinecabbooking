
@extends('adminmain')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Passenger
                <small>Passenger Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="adminindex"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href=""><i class="fa fa-dashboard"></i>Passenger</a></li>
                <li class="active">Welcome passenger</li>
            </ol>
        </section>

        <section class="content">
            <form method="post" action="{{Route('updatepassenger')}}">
                {{csrf_field()}}
                <input type="hidden" id="passenger_id" name="passenger_id" value="{{$passenger->passenger_id}}">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <form>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Full_Name</label>
                                        <input type="text" placeholder="Full Name" name="full_name" class="form-control" style="font-size: large" value="{{$passenger->full_name}}">

                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Birth Date</label>
                                        <input type="date" placeholder="Birth Date" name="birth_date" class="form-control" style="font-size: large" value="{{$passenger->birth_date}}">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Email</label>
                                        <input type="text" placeholder="Email" name="email" class="form-control" style="font-size: large" value="{{$passenger->email}}">
                                    </div>
                                        <div class="form-group" style="font-size: x-large">
                                        <label>Password</label>
                                        <input type="password" placeholder="Password" name="password" class="form-control" style="font-size: large" value="{{$passenger->password}}">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Address</label>
                                        <input type="text" placeholder="Address" name="address" class="form-control" style="font-size: large" value="{{$passenger->address}}">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Contact No</label>
                                        <input type="text" placeholder="Contact No" name="contact_no" class="form-control" style="font-size: large" value="{{$passenger->contact_no}}">
                                    </div>
                                    <div align="center" >
                                        <button type="submit" class="btn btn-primary btn-lg">ADD PASSENGER</button>
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