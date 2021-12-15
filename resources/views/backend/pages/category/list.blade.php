@extends('backend.layouts.app')

@section('title', 'Category list')

@section('content')
    <section class="content-header">
        <h1>
            Category
            <small>Category list</small>
            <small>
                <a href="{{ route('backend.category.add') }}" class="btn btn-success">Add Category</a>
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
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Banner</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key => $category)
                <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>

                    <td>
                        <img height=100 width=100 src="{{ !empty($category->banner)? asset('uploads/'.$category->banner) : asset('backend/dist/img/not-found.jpg')  }}">
                    </td>

                <td >
{{--                <a href="#"><i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a> &nbsp;--}}
                <a href="{{ route('backend.category.edit',['id'=> $category->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;
                    <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $category->id }}"
                                  data-name="{{ $category->name }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
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
            $('.category').addClass('active');

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
                        url: "{{ route('backend.category.destroy') }}",
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
