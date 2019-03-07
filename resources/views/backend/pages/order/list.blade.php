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
                <a href="#" class="btn btn-success">Download csv</a>
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
                            @if($order->status == 'Pending')
                                <span class=" badge alert-info">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Declined')
                                <span class=" badge alert-error">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Payment_failed')
                                <span class="badge alert-dark">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Approved')
                                <span class="badge alert-success">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Refund Request')
                                <span class="badge alert-warning"> &nbsp;{{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Refunded')
                                <span class="badge alert-secondary">&nbsp; {{ $order->status }} &nbsp;</span>
                            @elseif($order->status == 'Delivered')
                                <span class="badge alert-success">&nbsp; {{ $order->status }} &nbsp;</span>
                            @endif
                        </td>
                        <td>{{ $order->created_at }}</td>
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
        });

    </script>
@endpush