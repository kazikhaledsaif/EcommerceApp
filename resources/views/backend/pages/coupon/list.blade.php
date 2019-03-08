@extends('backend.layouts.app')

@section('title', 'coupon')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Coupon
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
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($coupons as $coupon)
                    <tr>
                        <td>{{ $coupon->id }}</td>
                        <td>{{ $coupon->code }}</td>
                        <td>{{ $coupon->type }}</td>
                        <td>{{ $coupon->value }}</td>
                        <td>{{ $coupon->percent_off }}</td>
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
        });

        $(document).on('click', '.deletebtn', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var token = $(this).data('token');
            var name = $(this).data('name');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'Danger',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('backend.product.destroy') }}",
                        data: {id:id, _token:token},
                        success: function (data) {
                            if(data.success == true){ // if true (1)
                                setTimeout(function(){  // wait for 5 secs(2)
                                    location.reload();  // then reload the page.(3)
                                }, 500);
                            }
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