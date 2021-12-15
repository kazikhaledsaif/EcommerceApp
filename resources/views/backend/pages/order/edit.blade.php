@extends('backend.layouts.app')

@section('title', 'Update Order')

@section('content')
    <section class="content-header">
        <h1>
            Order's Report
            <small>You can change the status</small>
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
                    <i class="fa fa-s"></i>
                    <small class="pull-right">Date: {{ date('F j, Y, g:i:s a', strtotime( $order->created_at)) }}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>

        <!-- /.col -->
        <div class="col-sm-4 invoice-col">

            <address>
                <strong>{{ $order->billing_first_name }} {{ $order->billing_last_name }}</strong><br>
                Address: {{ $order->billing_address }}<br>
                {{ $order->billing_town }}, {{ $order->billing_city}} &nbsp;
                {{ $order->billing_zip_code }} <br>
                Phone: {{ $order->billing_phone_no }}<br>
                Email: {{ $order->billing_email }}
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Order ID #{{ $order->id  }}</b><br>
            <br>
            <b>Shipping ID:</b> 4F3S8J<br>
            <br>
        </div>
        <!-- /.col -->

        <div class="col-sm-4 invoice-col">

            <b>Ordered: </b> {{ date('F j, Y, g:i:s a', strtotime( $order->created_at) ) }} <br>
            <b>Last Update: </b> {{  date('F j, Y, g:i:s a', strtotime( $order->updated_at)  )}} <br> <br>


        </div>
        <form class="form-horizontal" action="{{ route('backend.order.update') }}" method="post">

            <div class="clearfix"></div>
            @csrf
            <input type="hidden" class="form-control"  name="id" value="{{ $order->id }}" >

            <div class="box-body">

                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Order Status</label>
                    <div class="col-sm-4">

                        <select name="status" id="status" class="form-control  ">
                            <option {{ $order->status=="Received" ? 'selected' : "" }}  value="Received" >Received</option>
                            <option {{ $order->status=="Processing" ? 'selected' : "" }}  value="Processing" >Processing</option>
                            <option {{ $order->status=="Cancelled" ? 'selected' : "" }}  value="Cancelled" style=" color: #b83400">Cancelled</option>
                            <option {{ $order->status=="Shipped" ? 'selected' : "" }}   value="Shipped" style=" color: #00cc66">Shipped</option>
                            <option {{ $order->status=="Delivered" ? 'selected' : "" }}  value="Delivered" style=" color: #00cc66">Delivered</option>

                        </select>
                        @if ($errors->has('reason'))
                            <span class="text-red">
                                 <strong>{{ $errors->first('reason') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div id="reason-div">
                        <label for="reason" class="col-sm-2 control-label">Cancel reason</label>

                        <div class="col-sm-4">
                            <textarea name="reason" id="reason" cols="77" rows="6">{{empty($order->cancelReason)?"":$order->cancelReason->reasons}}</textarea>
                        </div>

                    </div>

                </div>

                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Billing Address</label>

                    <div class="col-sm-4">
                        <textarea name="address" id="address" cols="77" rows="6">{{ $order->billing_address }}</textarea>
                    </div>
                    <label for="town" class="col-sm-2 control-label">Town </label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control"  id="town" name="town" value="{{ $order->billing_town}}" >
                    </div>

                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="city"  name="city" value="{{ $order->billing_city}}" >
                    </div>
                    <label for="zip" class="col-sm-2 control-label">Zip </label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control"  id="zip" name="zip" value="{{ $order->billing_zip_code}}" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-sm-2 control-label">Contact No.</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="number"  name="number" value="{{ $order->billing_phone_no}}" >
                    </div>
                    <label for="email" class="col-sm-2 control-label">Email </label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control"  id="email" name="email" value="{{ $order->billing_email}}" >
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


@push('scripts')

    <script>
        $(function () {

               if($("#status").find(":selected").text() === "Cancelled" ){
                   $("#reason-div").show();
                }
               else{
                   $("#reason-div").hide();
               }

            $("#status").change(function() {
                var val = $(this).val();
                if(val === "Cancelled") {
                    $("#reason-div").show();
                }
                else  {
                    $("#reason-div").hide();
                }
            });
        });
    </script>
    @endpush
