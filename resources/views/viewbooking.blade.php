@extends('adminmain')

@section('content')
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Details</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>

            <div class="box-body">
               <div class="row">
                   <div class="col-md-12">
                       <div class="col-md-6" style="font-size: larger">

                           <div class="row">
                               <div class="col-md-12">
                                   {{$booking->booking_id}}
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   {{$booking->name}}
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   {{$booking->pickup_date}}
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-12">
                                   {{$booking->pickup_location}}
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   {{$booking->drop_location}}
                               </div>
                           </div>  <div class="row">
                               <div class="col-md-12">
                                   {{$booking->email}}
                               </div>
                           </div>  <div class="row">
                               <div class="col-md-12">
                                   {{$booking->contact_no}}
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6">

                       </div>
                   </div>
               </div>
            </div>
            <!-- /.box-body -->
            {{--<div class="box-footer">--}}
                {{--Footer--}}
            {{--</div>--}}
            {{--<!-- /.box-footer-->--}}
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
    @endsection