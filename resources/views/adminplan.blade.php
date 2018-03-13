@extends('adminmain')

@section('content')
    <link rel="stylesheet" href="css/style.css">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Welcome to Admin
                <small>start your work with Admin</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Welcome Admin</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <form method="post" action="{{Route('planstore')}}">
            {{csrf_field()}}

            <div class="box-body" style="font-size: large">
                <label>pickup City</label>
                <input type="text"  name="pickup_city" class="form-control" id="usr" placeholder="First name">
                <label>Drop City</label>
                <input type="text" class="form-control" name="drop_city" id="usr" placeholder="Lirst name">
                <label>Price</label>
                <input type="text" class="form-control" id="usr"  name="price" placeholder="Email">
                <label>Location</label>
                <input type="text" class="form-control"  name="location" id="usr" placeholder="Contact no">
                <label>Tolltax</label>
                <input type="text" class="form-control"  name="tolltax" id="usr" placeholder="Contact no">
                    <div align="center">
                        <button type="submit" class="btn btn-info">ADD PLAN</button>

                    </div>
            </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection