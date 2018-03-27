@extends('adminmain')



@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class=" glyphicon glyphicon-shopping-cart"></i>
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
                        <div align="left">
                            <a href="neworder"><button type="button" class="btn btn-primary btn-lg">ADD ORDER</button></a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">

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
                                    <th>Action</th>

                                </tr>
                                </thead>

                                    <tbody>
                                    @foreach($OrderData as $orderdata)
                                        <tr>
                                            <td>{{$orderdata->pickup_city}}</td>
                                            <td>{{$orderdata->drop_city}}</td>
                                            <td>{{$orderdata->pickup_date}}</td>
                                            <td>{{$orderdata->pickup_address}}</td>
                                            <td>{{$orderdata->drop_address}}</td>
                                            <td>{{$orderdata->car_id}}
                                            </td>
                                            <td>{{$orderdata->price}}</td>
                                            <td> {{$orderdata->driver_id}}</td>
                                            <td>{{$orderdata->payment_status}}</td>
                                            <td> <a href="{{route('vieworder',['id'=>$orderdata->order_id])}}"> <i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;</a>
                                                <a href="{{route('editorder',['id'=>$orderdata->order_id])}}"> <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                                                <a href="{{route('distroyorder',['id'=>$orderdata->order_id])}}"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach

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
                                    <th>Action</th>

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