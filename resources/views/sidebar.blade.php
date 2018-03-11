


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="user">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="adminindex"><i class="fa fa-circle-o"></i>Home Page</a></li>
                </ul>
            </li>
            <!--dashboard-->
            <li class="treeview">
                <a href="#">
                    <i class=" fa fa-user"></i>
                    <span>Admin</span>
                    {{--<a href="city"></a>--}}
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>


                <ul class="treeview-menu">
                    <li><a href="user"><i class="fa fa-hand-o-right"></i>admin</a></li>
                </ul>
                <!--admin-->
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-car"></i>
                    <span>Car</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="car"><i class="fa fa-hand-o-right "></i>Car</a></li>
                </ul>
            </li>
            <!--car-->
            <li class="treeview">
                <a href="#">
                    <i class=" glyphicon glyphicon-shopping-cart"></i>
                    <span>Order</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="order"><i class="fa  fa-hand-o-right"></i>order</a></li>
                </ul>
            </li>
            <!--order-->
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-search"></i>
                    <span>inquiry</span>
                    <span class="pull-right-container">
              <span class="1label label-primary pull-right"></span>
            </span>
                </a>
                <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="inquiry"><i class="fa fa-hand-o-right "></i>inquiry</a></li>
                </ul>
            </li>
            <!--inquiry-->
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-taxi "></i>
                    <span>Driver</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="driver"><i class="fa fa-hand-o-right "></i>Driver</a></li>
                </ul>
            </li>
            <!--driver-->
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-users"></i>
                    <span>Passenger</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="passenger"><i class="fa fa-hand-o-right "></i>Passenger</a></li>
                </ul>
            </li>
            <!--passenger-->
            <li class="treeview">
                <a href="#">
                    <i class=" fa  fa-industry"></i>
                    <span>City</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="city"><i class="fa fa-hand-o-right"></i> City</a></li>
                </ul>
            </li>
            <!--city-->

            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-car"></i>
                    <span>Booking</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="adminbooking"><i class="fa fa-hand-o-right "></i>Booking</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class=" fa fa-file-text-o"></i>
                    <span>Plan</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="plan"><i class="fa  fa-hand-o-right"></i>plan</a></li>
                </ul>
            </li>
            <!--plan-->


            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-inr"></i>
                    <span>Payment</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="payment"><i class="fa fa-hand-o-right "></i>Payment</a></li>
                </ul>
            </li>
            <!--payment-->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-weixin"></i>
                    <span>feedback</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a> <ul class="treeview-menu">
                    {{--<li><a href="admin/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                    <li><a href="adminfeedback"><i class="fa fa-hand-o-right "></i>feedback</a></li>
                </ul>
            </li>
            <!--feedback-->
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>
