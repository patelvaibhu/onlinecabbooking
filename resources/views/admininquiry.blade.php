
@extends('adminmain')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Inquiry
                <small>Inquiry Details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Welcome Inquiry</li>
            </ol>
        </section>

        <section class="content">
            <form method="post" action="{{Route('inquirystore')}}">
                {{csrf_field()}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <form>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Passenger Name</label>
                                        <input type="text" placeholder="Passenger Name" name="passenger_name" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Email</label>
                                        <input type="text" placeholder="Email" name="email" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Contact No</label>
                                        <input type="datetime-local" placeholder="Contact No" name="contact_no" class="form-control" style="font-size: large">
                                    </div>
                                    <div class="form-group" style="font-size: x-large">
                                        <label>Message</label>
                                        <textarea  input type="text" placeholder="Message" name="message" class="form-control" style="font-size: large"></textarea>
                                        {{--<input type="text" placeholder="Email" name="email" class="form-control" style="font-size: large">--}}
                                    </div>
                                    <div align="center" >
                                        <button type="submit" class="btn btn-primary btn-lg">INQUIRY</button>
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