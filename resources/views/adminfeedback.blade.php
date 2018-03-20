
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
                            <thead>
                            <tr>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
                                <th>MESSAGE</th>
                                <th>ACTION</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($Feedbackdata as $feedback)
                            <tr>
                                <td>{{$feedback->firstname}}</td>
                                <td>{{$feedback->lastname}}</td>
                                <td>{{$feedback->email}}</td>
                                <td>{{$feedback->contact_no}}</td>
                                <td>{{$feedback->message}}</td>


                                <td><a href="{{route('viewfeedback',['id'=>$feedback->feedback_id])}}"> <i class="fa fa-eye"></i></a>&nbsp;&nbsp;
                                    <a href="{{route('distroyfeedback',['id'=>$feedback->feedback_id])}}"><i class="fa fa-trash"></i></td>

                             </tr>
                            @endforeach

                            <tfoot>
                            <tr>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>EMAIL</th>
                                <th>CONTACT_NO</th>
                                <th>MESSAGE</th>
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