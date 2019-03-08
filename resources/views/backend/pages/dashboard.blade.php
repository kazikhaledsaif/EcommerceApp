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

    <section class="content container-fluid">
    <div class="row">
        {{--first row --}}
        <div class="col-lg-3 col-xs-6">

            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $pendingOrder }}</h3>

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
                    <h3>{{ $approvedOrder }}</h3>

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
                    <h3>{{ $successOrder }}</h3>

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

    <h4>Order report</h4>

    <div class="row">

        <div class="col-md-8">
            <div class="info-box border-success">
                <div class="panel panel-bordered">
                    <h2 align="center">Last Order </h2>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTable" class="table table-dark table-bordered table-hover ">
                                <thead class="bg-black-gradient">
                                <tr>
                                    <th>Order No</th>
                                    <th>Name</th>
                                    <th>Phone </th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($lastOrder as $last)
                                    <tr>
                                        <td>#{{ $last->id+1000 }}</td>
                                        <td>{{ $last->billing_first_name }} {{ $last->billing_last_name }}</td>
                                        <td>{{ $last->billing_phone_no }} </td>
                                        <td>{{ $last->billing_total }} ৳</td>
                                        <td>{{ $last->status }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Order No</th>
                                    <th>Name</th>
                                    <th>Phone </th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- second row --}}

        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="ion ion-android-clipboard"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Today's sell</span>
                    <span class="info-box-number">{{ $dailySell }} ৳</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                    </div>
                    <span class="progress-description">
                        {{ $dailyItem }} Item(s) sold
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>

            <div class="info-box bg-orange">
                <span class="info-box-icon"><i class="ion ion-android-alarm-clock"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Monthly sell</span>
                    <span class="info-box-number">{{ $monthlySell }} ৳</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      {{ $monthlyItem }} Item(s) sold
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="ion ion-stats-bars"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Sold</span>
                    <span class="info-box-number">{{ $totalSell }} ৳</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                        {{ $totalItem }} Item(s) sold
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>




        </div>

    </div>


    </section>
    <!-- /.content -->

@endsection

@push('scripts')


    {{-- DataTable js --}}
    <link rel="stylesheet" href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#dataTable').DataTable();
        });
    </script>
@endpush