@extends('adminmain')



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa  fa-car"></i>
           Booking
            <small>Booking details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">booking</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Booking</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <a href="booking"><button  type="button" class="btn" align="right">Add</button></a>
                            <thead>
                            <tr>
                                <th>NAME</th>
                                <th>PICKUP DATE</th>
                                <th>PICKUP LOCATION</th>
                                <th>DROP LOCATION</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
                            </tr>

                            </thead>
                            <tbody>

                                <tr>
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

                            <tfoot>
                            <tr>
                                <th>NAME</th>
                                <th>PICKUP DATE</th>
                                <th>PICKUP LOCATION</th>
                                <th>DROP LOCATION</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
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