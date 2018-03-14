@extends('adminmain')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa  fa-taxi"></i>
           Driver
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Driver</li>
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

                            <a href="adddriver"><button type="button" class="btn">Add</button></a>
                            <thead>
                            <tr>
                                <th>FULL NAME</th>
                                <th>LICENCE NO</th>
                                <th>ADHARCARD NO</th>
                                <th>LECTION CARD</th>
                                <th>ADDRESS</th>
                                <th>CITY</th>
                                <th>CONTACT NO</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($driverdata as $driver)
                            <tr>
                                <td>{{$driver->full_name}}</td>
                                <td>{{$driver->license_no}}</td>
                                <td>{{$driver->adharcard_no}}</td>
                                <td>{{$driver->election_card}}</td>
                                <td>{{$driver->address}}</td>
                                <td>{{$driver->city}}</td>
                                <td>{{$driver->contact_no}}</td>

                                <td> <i class="fa fa-eye"></i>&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-trash"></i></td>

                            </tr>
                            @endforeach

                            </tbody>
                            {{--@endforeach--}}

                            {{--@endfor--}}
                            <tfoot>

                            <tr>
                                <th>FULL NAME</th>
                                <th>LICENCE NO</th>
                                <th>ADHARCARD NO</th>
                                <th>LECTION CARD</th>
                                <th>ADDRESS</th>
                                <th>CITY</th>
                                <th>CONTACT NO</th>
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