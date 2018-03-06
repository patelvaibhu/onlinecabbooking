
@extends('adminmain')



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa  fa-user"></i>
            Admin
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Admin</li>
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

                            <a href="addcity"><button type="button" class="btn">Add</button></a>
                            <thead>
                            <tr>
                                <th>ADMIN_NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>CONTECT_NO</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Trident</td>
                                <td>Trident</td>
                                <td>Trident</td>

                                <td> <i class="fa fa-eye"></i></td>
                                <td> <i class="fa fa-edit"></i></td>
                                <td> <i class="fa fa-trash"></i></td>
                            </tr>
                            </tbody>
                            {{--@endfor--}}
                            <tfoot>

                            <tr>
                                <th>ADMIN_NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>CONTECT_NO</th>
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