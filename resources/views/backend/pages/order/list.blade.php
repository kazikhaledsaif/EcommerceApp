@extends('backend.layouts.app')

@section('title', 'Order statement')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Order's Report
            <small>You can download as csv</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Order</li>
        </ol>
    </section>

    <div class="box">
        <div class="box-header">


            <div class="col-md-6 ">
{{--                <a href="#" class="btn btn-success">Download csv</a>--}}
            </div>
            <div class="col-md-6">

                <form action="{{ route('backend.order.list') }}" method="GET">
                    <div class="col-md-2">
                        <span> Order Status</span>
                    </div>

                    <div class="col-md-4">

                        <select  class="form-control" name="status" id="input">
                            <option value="">All</option>
                            <option value="Received" >Received</option>
                            <option   value="Processing" >Processing</option>
                            <option  value="Cancelled" style=" color: #b83400">Cancelled</option>
                            <option value="Shipped" style=" color: #00cc66">Shipped</option>
                            <option  value="Delivered" style=" color: #00cc66">Delivered</option>


                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-info " value="Filter">
                    </div>


                </form>
            </div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Total Bill</th>
                    <th>Status</th>
                    <th>Order time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->billing_email }}</td>
                        <td>{{ $order->billing_town }}, {{ $order->billing_city }}</td>
                        <td>{{ $order->billing_total }}</td>
                        <td>
                            @if($order->status == 'Received')
                                <span class=" badge alert-info">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Cancelled')
                                <span class=" badge alert-error">&nbsp; {{ $order->status }} &nbsp;</span><br>
                                <span>{{empty($order->cancelReason)?"":$order->cancelReason->reasons}}</span>
                            @elseif($order->status == 'Processing')
                                <span class="badge alert-dark">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Shipped')
                                <span class="badge alert-success">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Delivered')
                                <span class="badge alert-success">&nbsp; {{ $order->status }} &nbsp;</span>
                            @endif
                        </td>
                        <td>{{ date('F j, Y, g:i:s a', strtotime( $order->created_at) ) }}</td>
                        <td>
                            <a href="{{ route('backend.order.show',['id'=> $order->id]) }}"><i class="fa fa-envelope-open fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a>&nbsp;&nbsp;
                            <a href="{{ route('backend.order.edit',['id'=> $order->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:forestgreen" aria-hidden="true"></i> </a>&nbsp;&nbsp;
                            {{--<a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $order->id }}"--}}
                                          {{--data-name="{{ $order->mail }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>--}}
                        </td>

                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Total Bill</th>
                    <th>Status</th>
                    <th>Order time</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>



@endsection

@push('scripts')


    {{-- DataTable js --}}
    <link rel="stylesheet" href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#list').DataTable();
            $('.order').addClass('active');
        });

    </script>
@endpush
