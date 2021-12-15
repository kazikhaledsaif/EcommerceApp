@extends('backend.layouts.app')

@section('title', 'New Coupon')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Coupon
            <small>Create a new Coupon</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href="#"><i class="fa fa-barcode"></i> Coupon</a></li>
            <li class="active">New Coupon</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content container-fluid">

        <div class="coupon">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.coupon.create') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                            <div class="form-group">

                            <label for="couponCode" class="col-sm-2 control-label">Coupon Code *</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="couponCode" name="code" placeholder="New Coupon code.." required>
                                @if ($errors->has('code'))
                                    <span class="text-red" >
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="couponType" class="col-sm-1 control-label">Type</label>

                            <div class="col-sm-3">
                                <select class="form-control " id="couponType" name="couponType">
                                        <option value="fixed">Fixed</option>
                                        <option value="percent_off">Percent Off</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="couponValue" class="col-sm-2 control-label">Discount Amount</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" id="couponValue" name="couponValue" placeholder="For Fixed amout"  >
                                </div>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" id="couponValue" name="couponPercentage" placeholder="For Percentage discount"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="couponExpire" class="col-sm-2 control-label">Expire Date</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="couponExpire" name="couponExpireDate" placeholder="Expire"  >
                                </div>

                            </div>
                        <div class="form-group">

                            <label for="couponMaxLimit" class="col-sm-2 control-label">Maximum limit</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="couponMaxLimit" name="couponMaxLimit" placeholder="" >
                            </div>

                            <label for="couponUserLimit" class="col-sm-2 control-label">Per User limit</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="couponUserLimit" name="couponUserLimit" placeholder="" >
                            </div>
                        </div>


                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Create Coupon</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </section>

    <section class="container">
        <cite><h5>* Please use unique coupon code name</h5></cite>
        <cite><h5>* Expire date feature is not available</h5></cite>
        <br>
        <h5>Coupon's name already active below</h5>
        <table>
            <tr>
            @foreach($coupons as $coupon)
                <li style="list-style-type: none; text-decoration: underline; display: inline; padding-right: 3px" >
                    {{$coupon['code'] }}
                </li>
                @endforeach
            </tr>
        </table>
    </section>

@endsection
