@extends('adminmain')

@section('content')
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                City
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">City</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Details</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6" style="font-size: larger">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>PICKUP_CITY</th>
                                        <th>DROP_CITY</th>
                                        <th>PICKUP_DATE</th>
                                        <th>PICKUP_ADDRESS</th>
                                        <th>DROP_ADDRESS</th>
                                        <th>CAR_ID</th>
                                        <th>PRICE</th>
                                        <th>DRIVER_ID</th>
                                        <th>PAYMENT_STATUS</th>
                                    </tr>
                                    </thead>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->order_id}}
                                            </td>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <td>
                                                {{$order->pickup_city}}
                                            </td>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->drop_city}}
                                            </td>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->pickup_date}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->pickup_address}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->drop_address}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->car_id}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->price}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->driver_id}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$order->payment_status}}
                                            </td>
                                        </div>
                                    </div>
                                </table>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection