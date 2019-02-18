@extends('backend.layouts.app')

@section('title', 'Products list')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
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
                    <th>Updated</th>
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
                    <td>{{ $product->updated_at }}</td>

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