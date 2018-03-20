@extends('adminmain')



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="glyphicon glyphicon-search"></i>
            Inquiry
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Inquery</li>
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
                        <a href="admininquiry"><button type="button" class="btn btn-primary btn-lg">INQUIRY</button></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>PASSENGER_NAME</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
                                <th>MESSAGE</th>
                                <th>ACTION</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($inquirydata as $inquiry)
                            <tr>
                                <td>{{$inquiry->passenger_name}}</td>
                                <td>{{$inquiry->email}}</td>
                                <td>{{$inquiry->contact_no}}</td>
                                <td>{{$inquiry->message}}</td>

                                <td>
                                    <a href="{{route('viewinquiry',['id'=>$inquiry->inquiry_id])}}"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('distroyinquiry',['id'=>$inquiry->inquiry_id])}}"> <i class="fa fa-trash"></i></a></td>
                            </tr>
                                @endforeach
                            </tbody>
                            {{--@endfor--}}
                            <tfoot>

                            <tr>
                                <th>PASSENGER_NAME</th>
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

@section('js')
    <script>
        $(function () {
            $('#example1').DataTable()
        })
    </script>
@endsection






