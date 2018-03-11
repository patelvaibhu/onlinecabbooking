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
            <div class="box-body" style="font-size: large">
                <label>First Name</label>
                <input type="text"  name="firstname" class="form-control" id="usr" placeholder="First name">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" id="usr" placeholder="Lirst name">
                <label>Email</label>
                <input type="text" class="form-control" id="usr"  name="email" placeholder="Email">
                <label>Conatct No</label>
                <input type="text" class="form-control"  name="contact_no" id="usr" placeholder="Contact no">
                <label>Message</label>
                <textarea class="form-control" palceholder="Message"  rows="5" id="comment" ></textarea>
                    <div align="center">
                        <button type="button" class="btn btn-info">ADD PLAN</button>

                    </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection