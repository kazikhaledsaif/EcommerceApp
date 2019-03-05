@extends('backend.layouts.app')
@section('title' , 'Dashboard')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin Panel
            <small>Everything control over here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="row">
        {{--first row --}}
        <div class="col-lg-3 col-xs-6">

        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>

                <p>Pending Order</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>15</h3>

                <p>To Delivery</p>
            </div>
            <div class="icon">
                <i class="fa fa-ambulance"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>100</h3>

                <p>Successful Order</p>
            </div>
            <div class="icon">
                <i class="fa fa-windows"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
        <div class="col-lg-3 col-xs-6">

        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <h3>250</h3>

                <p>Product</p>
            </div>
            <div class="icon">
                <i class="fa fa-address-book-o"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
    </div>

        <h4>Sells report</h4>

        <div class="row">


        {{-- second row --}}

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="ion ion-stats-bars"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total sell</span>
                    <span class="info-box-number">41,410 $</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                    <span class="progress-description">
                    Life time selling
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="ion ion-android-clipboard"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Monthly sell</span>
                    <span class="info-box-number">11,410 $</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                    <span class="progress-description">
                    Monthly selling amount
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="ion ion-android-alarm-clock"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Monthly sell</span>
                    <span class="info-box-number">410 Pcs</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                    <span class="progress-description">
                    Monthly selling Quantity
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>


    </section>
    <!-- /.content -->















@endsection