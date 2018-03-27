 @extends('adminmain')

            @section('content')
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Plan
                            <small>plan Details</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="adminindex"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="order"><i class="fa fa-dashboard"></i>plan</a></li>
                            <li class="active">Welcome plan</li>
                        </ol>
                    </section>

                    <section class="content">
                        <form method="post" action="{{Route('planstore')}}">
                            {{csrf_field()}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-8">
                                            <form>
                                                <div class="form-group" style="font-size: x-large">
                                                    <label>pickup City</label>
                                                    <select class="form-control" style="font-size: large"  name="pickup_city">
                                                        <option>Vadodara</option>
                                                        <option>Vasad</option>
                                                        <option>Anand</option>
                                                        <option>Ahemdabad</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="font-size: x-large">
                                                    <label>Drop City</label>
                                                    <select class="form-control" style="font-size: large"  name="drop_city">
                                                        <option>Vadodara</option>
                                                        <option>Vasad</option>
                                                        <option>Anand</option>
                                                        <option>Ahemdabad</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="font-size: x-large">
                                                    <label>Price</label>
                                                    <input type="text" placeholder="Price" name="price" class="form-control" style="font-size: large">
                                                </div>
                                                <div class="form-group" style="font-size: x-large">
                                                    <label>Location</label>
                                                    <input type="text" placeholder="Location" name="location" class="form-control" style="font-size: large">
                                                </div>
                                                <div class="form-group" style="font-size: x-large">
                                                    <label>Tolltax</label>
                                                    <input type="text" placeholder="Tolltax" name="tolltax" class="form-control" style="font-size: large">
                                                </div>
                                                <div align="center" >
                                                    <button type="submit" class="btn btn-primary btn-lg">ADD PLAN</button>
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