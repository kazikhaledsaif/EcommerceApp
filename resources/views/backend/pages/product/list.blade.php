@extends('backend.layouts.app')

@section('title', 'Products list')

@section('content')

    <div class="box">
        <div class="box-header">
            <div class="col-md-3">
                <h3 class="box-title">Product list</h3>
            </div>

            <div class="col-md-6 ">
                <a href="{{ route('backend.product.add') }}" class="btn btn-success">Add Product</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="product-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Regular Price</th>
                    <th>Discount Price</th>
                    <th>Stock</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key=>$product)
                <tr>

                    <td>{{ $key+1}}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>{{ $product->regular_price }}</td>
                    <td>{{ $product->discount_price }}</td>
                    <td>{{ $product->stock  }}</td>
                    <td>
                    <img height=100 width=100 src="{{ !empty($product->product_image)? asset('uploads/'.$product->product_image) : asset('backend/dist/img/not-found.jpg')  }}">

                    <td>
                        <a target="_blank" href="{{ route('frontend.shop.show',['id'=> $product->slug]) }}"><i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a> &nbsp;
                        <a href="{{ route('backend.product.edit',['id'=> $product->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;
                        <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $product->id }}"
                                      data-name="{{ $product->name }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                    </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Regular Price</th>
                    <th>Discount Price</th>
                    <th>Stock</th>
                    <th>Image</th>
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
            $('#product-list').DataTable();
            $('.product').addClass('active');
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
                        url: "{{ route('backend.product.destroy') }}",
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
