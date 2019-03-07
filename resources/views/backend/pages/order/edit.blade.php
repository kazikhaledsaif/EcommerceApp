@extends('backend.layouts.app')

@section('title', 'Update Order')

@section('content')
    <section class="content-header">
        <h1>
            Order's Report
            <small>You can download as csv</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href="{{ route('backend.order.list') }}"><i class="fa fa-bank"></i> Order's Report</a></li>
            <li class="active">Order update</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i>  Jahangir Enterprice
                    <small class="pull-right">Date: {{ date('F j, Y, g:i:s a', strtotime( $order->created_at)) }}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>

        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            To
            <address>
                <strong>{{ $order->billing_first_name }} {{ $order->billing_last_name }}</strong><br>
                input{{ $order->billing_address }}<br>
                {{ $order->billing_town }}, {{ $order->billing_city}} &nbsp;
                {{ $order->billing_zip_code }} <br>
                Phone: {{ $order->billing_phone_no }}<br>
                Email: {{ $order->billing_email }}
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice #{{ $order->id + 1000 }}</b><br>
            <br>
            <b>Order ID:</b> 4F3S8J<br>
            <br>
        </div>
        <!-- /.col -->


        <form class="form-horizontal" action="{{ route('backend.order.update') }}" method="post">
            <div class="col-sm-4 invoice-col">

                <b>Ordered: </b> {{ $order->created_at }} <br>
                <b>Last Update: </b> {{ $order->updated_at }} <br> <br>
                <div class="form-group">
                    <label for="status" class="col-sm-6 control-label">Order Status</label>
                    <div class="col-sm-6">
                        <select name="status" id="status" class="form-group">
                            <option value="{{ $order->status }}" disabled>{{ $order->status }}</option>
                            <option value="Pending" >Pending</option>
                            <option value="Declined" style=" color: #b83400">Declined</option>
                            <option value="Approved" style=" color: #00A9F0">Approved</option>
                            <option value="Delivered" style=" color: #00cc66">Delivered</option>
                            <option value="Refund Request">Refund Request</option>
                            <option value="Refunded">Refunded</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
            @csrf
            <input type="hidden" class="form-control"  name="id" value="{{ $order->id }}" >

            <div class="box-body">



                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Billing Address</label>

                    <div class="col-sm-4">
                        <textarea name="address" id="address" cols="50" rows="3">{{ $order->billing_address }}</textarea>
                    </div>
                    <label for="town" class="col-sm-2 control-label">Town </label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control"  id="town" name="town" value="{{ $order->billing_town}}" >
                    </div>

                </div>
                <div class="form-group">
                    <label for="number" class="col-sm-2 control-label">Contact No.</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="number"  name="number" value="{{ $order->billing_phone_no}}" >
                    </div>

                </div>


                </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{  route('backend.order.list') }}" class="btn btn-info">Cancel</a>
                <button type="submit" class="btn btn-success pull-right">Update Order</button>
            </div>
            <!-- /.box-footer -->
        </form>



    </section>


@endsection