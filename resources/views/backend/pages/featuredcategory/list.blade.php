@extends('backend.layouts.app')

@section('title', 'Featured Category list')

@section('content')

    <div class="box">
        <div class="box-header">
            <div class="col-md-3">
                <h3 class="box-title">Featured Category list (Maximum 16)</h3>
            </div>

            <div class="col-md-6 ">
                <a href="{{ route('backend.featuredcategories.add') }}" class="btn btn-success">Add Featured Category</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="product-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($featuredcategories as $featuredcategory)
                <tr>
                    <td>{{ $featuredcategory->name }}</td>
                    <td>{{ $featuredcategory->slug }}</td>
                    <td><img height=100 width=100 src="{{ asset('uploads/'.$featuredcategory->image)  }}"> </td>
                    <td>
{{--                        <a href="{{ route('frontend.shop.show',['id'=> $featuredcategory->id]) }}"><i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a> &nbsp;--}}
                        <a href="{{ route('backend.featuredcategories.edit',['id'=> $featuredcategory->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;
                        <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $featuredcategory->id }}"
                                      data-name="{{ $featuredcategory->id }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                    </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
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
            $('.featuredcategories').addClass('active');

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
                        url: "{{ route('backend.featuredcategories.destroy') }}",
                        data: {id:id, _token:token},
                        success: function (data) {
                            console.log("SSSS")
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
