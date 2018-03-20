
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
                    <div align="">
                        <a href="adminuser"><button type="button" class="btn btn-primary btn-lg">ADMIN</button></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>ADMIN_NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>CONTECT_NO</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admindata as $admin)

                                <tr>
                                    <td>{{$admin->admin_name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->password}}</td>
                                    <td>{{$admin->contact_no}}</td>

                                <td>  <a href="{{route('viewadmin',['id'=>$admin->admin_id])}}"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;
                                    <i class="fa fa-pencil"></i>&nbsp;&nbsp;
                                    <a href="{{route('distroycar',['id'=>$admin->admin_id])}}"><i class="fa fa-trash"></i></a></td>
                            </tr>
                                @endforeach
                            </tbody>
                            {{--@endfor--}}
                            <tfoot>

                            <tr>
                                <th>ADMIN_NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>CONTECT_NO</th>
                                <th>ACTION</th>
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