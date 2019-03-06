@extends('backend.layouts.app')

@section('title', 'Category list')

@section('content')
    <section class="content-header">
        <h1>
            Category
            <small>Category list</small>
            <small>            <a href="#" class="btn btn-success">Add Category</a>
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Category</a></li>
        </ol>
    </section>

    <div class="box">


        <!-- /.box-header -->
        <div class="box-body">
            <table id="category-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Banner</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->banner }}</td>
                <td >
                <a href="#"><i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a> &nbsp;
                <a href="{{ route('backend.category.edit',['id'=> $category->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;
                <a href="###"><i class="fa fa-trash fa-lg" style="color:red" aria-hidden="true"></i> </a>
                </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Banner</th>
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
            $('#category-list').DataTable();
        });
    </script>
@endpush