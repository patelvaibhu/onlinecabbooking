@extends('adminmain')

@section('content')
    <!-- =============================================== -->

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
                <li><a href="driver">Driver</a></li>
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
                                        <th>FULL NAME</th>
                                        <th>LICENSE NO</th>
                                        <th>ADHARCARD NO</th>
                                        <th>ELECTION CARD</th>
                                        <th>ADDRESS</th>
                                        <th>CITY</th>
                                        <th>CONTACT NO</th>
                                    </tr>
                                    </thead>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->driver_id}}
                                            </td>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->full_name}}
                                            </td>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->license_no}}
                                            </td>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->adharcard_no}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->election_card}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->address}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->city}}
                                            </td>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <td>
                                                {{$driver->contact_no}}
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