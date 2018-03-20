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
                        <div align="">
                            <a href="adminuser"><button type="button" class="btn btn-primary btn-lg">PLAN</button></a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                <tr>
                                    <th>PICKUP CITY</th>
                                    <th>DROP CITY</th>
                                    <th>CAR TYPE</th>
                                    <th>PRICE</th>
                                    <th>TOLL TAX</th>
                                    <th>ACTION</th>
                                </tr>

                                </thead>
                                <tbody>
                               @foreach($plandata as $plan)
                                <tr>
                                    <td>{{$plan->pickup_city}}</td>
                                    <td>{{$plan->drop_city}}</td>
                                    <td>{{$plan->price}}</td>
                                    <td>{{$plan->location}}</td>
                                    <td>{{$plan->tolltax}}</td>

                                    <td> <a href="{{route('viewplan',['id'=>$plan->plan_id])}}"> <i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('distroyplan',['id'=>$plan->plan_id])}}"><i class="fa fa-trash"></i></a></td>

                                </tr>
                               @endforeach
                                <tfoot>
                                <tr>
                                    <th>PICKUP CITY</th>
                                    <th>DROP CITY</th>
                                    <th>CAR TYPE</th>
                                    <th>PRICE</th>
                                    <th>TOLL TAX</th>
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