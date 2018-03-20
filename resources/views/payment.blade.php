@extends('adminmain')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa  fa-inr"></i>
            Payment
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">payment</li>
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
                        <a href="adminuser"><button type="button" class="btn btn-primary btn-lg">PAYMENT</button></a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                            <tr>
                                <th>CAR_TYPE</th>
                                <th>EMAIL</th>
                                <th>AMOUNT</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Paymentdata as $payment)
                            <tr>
                                <td>{{$payment->car_name}}</td>
                                <td>{{$payment->email}}</td>
                                <td>{{$payment->amount}}</td>

                                <td> <a href="{{route('viewpayment',['id'=>$payment->payment_id])}}"> <i class="fa fa-eye"></i> </a>&nbsp;&nbsp;
                                    <i class="fa fa-pencil"></i>&nbsp;&nbsp;
                                    <a href="{{route('distroyplan',['id'=>$payment->payment_id])}}"><i class="fa fa-trash"></i></td>
                            </tr>
                                @endforeach
                            </tbody>
                            {{--@endfor--}}
                            <tfoot>

                            <tr>
                                <th>CAR_TYPE</th>
                                <th>EMAIL</th>
                                <th>AMOUNT</th>
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
