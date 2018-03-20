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

                            <thead>
                            <tr>
                                <th>NAME</th>
                                <th>PICKUP DATE</th>
                                <th>PICKUP LOCATION</th>
                                <th>DROP LOCATION</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
                                <th>ACTION</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($Bookdata as $bookdata)
                                <tr>
                                    <td>{{$bookdata->name}}</td>
                                    {{--<td>{{$orderdata->name}}</td>--}}
                                    <td>{{$bookdata->pickup_date}}</td>
                                    <td>{{$bookdata->pickup_location}}</td>
                                    <td>{{$bookdata->drop_location}}</td>
                                    <td>{{$bookdata->email}}</td>
                                    <td>{{$bookdata->contact_no}}</td>
                                    <td><a href="{{route('viewbooking',['id'=>$bookdata->booking_id])}}"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('distroybooking',['id'=>$bookdata->booking_id])}}"><i class="fa fa-trash"></i></a></td>

                                </tr>

                            @endforeach


                            <tfoot>
                            <tr>
                                <th>NAME</th>
                                <th>PICKUP DATE</th>
                                <th>PICKUP LOCATION</th>
                                <th>DROP LOCATION</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
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