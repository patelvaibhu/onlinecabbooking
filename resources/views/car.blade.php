
@extends('adminmain')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa  fa-car"></i>
            Car
            <small>Car Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Car</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Car Details</h3>

                    </div>
                    <div align="left">
                        <a href="newcar"><button type="button" class="btn">Add New Car</button></a>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>CITY NAME</th>
                                <th>LOCATION</th>
                                <th>DATE TIME</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($CarData as $car)
                            <tr>
                                <td>{{$car->city_name}}</td>
                                <td>{{$car->location}}</td>
                                <td>{{$car->datetime}}</td>

                                <td>  <a href="{{route('viewcar',['id'=>$car->car_id])}}"><i class="fa fa-eye"></i> &nbsp;&nbsp;</a>
                                    <i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-trash"></i></td>
                            </tr>

                                @endforeach
                            </tbody>
                            {{--@endfor--}}
                            <tfoot>

                            <tr>
                                <th>CITY NAME</th>
                                <th>LOCATION</th>
                                <th>DATE TIME</th>
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