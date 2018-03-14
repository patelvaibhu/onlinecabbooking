
@extends('adminmain')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Driver
                <small>Driver Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="adminindex"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="driver"><i class="fa fa-dashboard"></i>Driver</a></li>
                <li class="active">Welcome Driver</li>
            </ol>
        </section>

        <section class="content">
            <form method="post" action="{{Route('driverstore')}}">
                {{csrf_field()}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <form>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Full Name" name="full_name" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>License No</label>
                                        <input type="text" placeholder="License No" name="license_no" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Adharcard No</label>
                                        <input type="datetime-local" placeholder="Adharcard No" name="adharcard_no" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Election Card</label>
                                        <input type="text" placeholder="Election Card" name="election_card" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Address</label>
                                        <input type="text" placeholder="Address" name="address" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>City</label>
                                        <input type="text" placeholder="City" name="city" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Contact_No</label>
                                        <input type="text" placeholder="Contact No" name="contact_no" class="form-control" style="font-size: large">
                                    </div>
                                    <div align="center" >
                                        <button type="submit" class="btn btn-primary btn-lg">DRIVER</button>
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