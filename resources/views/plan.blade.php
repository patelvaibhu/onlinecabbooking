@extends('adminmain')



@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-file-text-o"></i>
                Plan
                <small>plan details</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">plan</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">PLAN</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">

                                <a href="adminplan"><button  type="button" class="btn" align="right">Add</button></a>
                                <thead>
                                <tr>
                                    <th>PICKUP CITY</th>
                                    <th>DROP CITY</th>
                                    <th>CAR TYPE</th>
                                    <th>PRICE</th>
                                    <th>TOLL TAX</th>
                                </tr>

                                </thead>
                                <tbody>
                                {{--@for($i=0;$i<5;$i++)--}}
                                <tr>
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
                                {{--@endfor--}}
                                <tfoot>
                                <tr>
                                    <th>PICKUP CITY</th>
                                    <th>DROP CITY</th>
                                    <th>CAR TYPE</th>
                                    <th>PRICE</th>
                                    <th>TOLL TAX</th>
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