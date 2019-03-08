@extends('backend.layouts.app')

@section('title', 'Coupon edit')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Coupon
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href="#"><i class="fa fa-barcode"></i> Coupon</a></li>
            <li class="active">Edit Coupon</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content container-fluid">

        <div class="coupon">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.coupon.update') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" id="couponCode" name="id"  value="{{ $coupon->id }}">

                    <div class="box-body">
                        <div class="form-group">

                            <label for="couponCode" class="col-sm-2 control-label">Coupon Code *</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="couponCode" name="couponCode" value="{{ $coupon->code }}" required>
                            </div>
                            <label for="couponType" class="col-sm-1 control-label">Type</label>

                            <div class="col-sm-3">
                                <select class="form-control " id="couponType" name="couponType">
                                    <option value="{{ $coupon->type }}"">{{ $coupon->type }}"</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percent_off">Percent Off</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="couponValue" class="col-sm-2 control-label">Discount Amount</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="couponValue" name="couponValue" value="{{ $coupon->value }}"  >
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="couponValue" name="couponPercentage"  value="{{ $coupon->percent_off }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="couponExpire" class="col-sm-2 control-label">Expire Date</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="couponExpire" name="couponExpireDate" value="{{ $coupon->expire }}"  >
                            </div>
                        </div>


                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Update Coupon</button>
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

    </section>


@endsection