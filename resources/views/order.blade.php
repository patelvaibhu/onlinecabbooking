@extends('adminmain')



@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Order
                <small>advanced tables</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">order</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">

                                <a href="neworder"><button type="button" class="btn">Add</button></a>
                                <thead>
                                <tr>
                                    <th>PICKUP CITY</th>
                                    <th>DROP CITY</th>
                                    <th>PICKUP DATE</th>
                                    <th>PICKUP ADDRESS</th>
                                    <th>DROP ADDRESS</th>
                                    <th>CAR ID</th>
                                    <th>PRICE</th>
                                    <th>DRIVER ID</th>
                                    <th>PAYMENT_STATUS</th>

                                </tr>
                                </thead>

                                    <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Trident</td>
                                        <td>Trident</td>
                                        <td>Trident</td>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
                                        <td> <i class="fa fa-eye"></i></td>
                                        <td> <i class="fa fa-edit"></i></td>
                                        <td> <i class="fa fa-trash"></i></td>
                                    </tr>
                                    </tbody>
                                <tfoot>

                                <tr>
                                    <th>PICKUP CITY</th>
                                    <th>DROP CITY</th>
                                    <th>PICKUP DATE</th>
                                    <th>PICKUP ADDRESS</th>
                                    <th>DROP ADDRESS</th>
                                    <th>CAR ID</th>
                                    <th>PRICE</th>
                                    <th>DRIVER ID</th>
                                    <th>PAYMENT_STATUS</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    </table>
    </div>
    <!-- /.box-body -->
    </div>

    </div>
@endsection
@section('js')
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
@endsection