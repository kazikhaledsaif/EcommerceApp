@extends('backend.layouts.app')

@section('title', 'Products list')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Product list</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="product-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Present Price</th>
                    <th>Discount Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>{{ $product->present_price }}</td>
                    <td>{{ $product->discount_price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td style="font-size: ">
                        <a href="#"><i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a>
                        <a href="{{ route('backend.product.edit',['id'=> $product->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a>
                        <a href="###"><i class="fa fa-trash fa-lg" style="color:red" aria-hidden="true"></i> </a>
                    </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Present Price</th>
                    <th>Discount Price</th>
                    <th>Stock</th>
                    <th>Updated</th>
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
        });
    </script>
@endpush