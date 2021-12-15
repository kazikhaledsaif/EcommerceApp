@extends('backend.layouts.app')

@section('title', 'Coupon list')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Coupon
            <small>Coupon list</small>
            <small><a href="{{ route('backend.coupon.add') }}" class="btn btn-success">New Coupon</a></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Coupon</li>
        </ol>
    </section>

    <div class="box">
        <!-- /.box-header -->

        <div class="box-body">
            <table id="coupon-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Coupon code</th>
                    <th>Type</th>
                    <th>Fixed value</th>
                    <th>Percentage value</th>
                    <th>Expired</th>
                    <th>Per user limit</th>
                    <th>Max limit</th>
                    <th>Minimum Amount</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($coupons as $coupon)
                    <tr>
                        <td>{{ $coupon->id }}</td>
                        <td>{{ $coupon->code }}</td>

                        @if($coupon->type== "percent_off")
                            <td>Percent Off</td>
                        @else
                            <td>Fixed Amount</td>
                        @endif


                        <td>{{ $coupon->value }}</td>
                        <td>{{ $coupon->percent_off }}</td>
                        @if( $coupon->expire)
                            <td>{{ date('F j, Y, g:i:s a', strtotime($coupon->expire) ) }}</td>
                        @else
                            <td>No expiry</td>
                       @endif

                        @if( $coupon->per_user_limit)
                            <td>{{ $coupon->per_user_limit }}</td>
                        @else
                            <td>No limit</td>
                        @endif
                        @if( $coupon->max_limit)
                            <td>{{ $coupon->max_limit }}</td>
                        @else
                            <td>No limit</td>
                        @endif
                        @if( $coupon->minimum_amount)
                            <td>{{ $coupon->minimum_amount }}</td>
                        @else
                            <td>No Minimum</td>
                        @endif


                        <td>{{ $coupon->created_at }}</td>
                        <td>
                            <a href="{{ route('backend.coupon.edit',['id'=> $coupon->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;
                            <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $coupon->id }}"
                                          data-name="{{ $coupon->code }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Coupon code</th>
                    <th>Type</th>
                    <th>Fixed value</th>
                    <th>Percentage value</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>

@endsection

@push('scripts')


    {{-- DataTable js --}}
    <link rel="stylesheet" href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#coupon-list').DataTable();
            $('.coupon').addClass('active');

        });

        $(document).on('click', '.deletebtn', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var token = $(this).data('token');
            var name = $(this).data('name');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",

                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('backend.coupon.destroy') }}",
                        data: {id:id, _token:token},
                        success: function (data) {
                            location.reload();
                        }
                    });

                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });

        });


    </script>
@endpush
