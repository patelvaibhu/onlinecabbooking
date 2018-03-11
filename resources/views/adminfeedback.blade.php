
@extends('adminmain')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-weixin"></i>
            Feedback
            <small>Feedback details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            {{--<li><a href="#">Tables</a></li>--}}
            <li class="active">feedback</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Feedback</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <a href="contactus"><button  type="button" class="btn" align="right">Add</button></a>
                            <thead>
                            <tr>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
                                <th>MESSAGE</th>
                            </tr>

                            </thead>
                            <tbody>

                            <tr>
                                <td>Trident</td>
                                <td>Trident</td>
                                <td>Trident</td>
                                <td>Trident</td>
                                <td>Trident</td>


                                <td> <i class="fa fa-eye"></i></td>
                                <td> <i class="fa fa-edit"></i></td>
                                <td> <i class="fa fa-trash"></i></td>

                            </tr>

                            <tfoot>
                            <tr>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
                                <th>MESSAGE</th>
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