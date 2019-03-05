@extends('backend.layouts.app')

@section('title', 'Reviews')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product's Reviews
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Product's Reviews </li>
        </ol>
    </section>

    <div class="box">
        <!-- /.box-header -->

        <div class="box-body">
            <table id="review-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Product slug</th>
                    <th>User's Rating</th>
                    <th>Overall Rating</th>
                    <th>Review Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->userName }}</td>
                        <td> <a href="{{ route('frontend.shop.show',['id'=> $review->slug]) }}">
                                {{ $review->slug }} </a></td>
                        <td>{{ $review->rating }}</td>
                        <td>{{ $review->overallRating }}</td>
                        <td>{{ $review->created_at }}</td>

                        <td>
                        <a href="{{ route('backend.reviews.show',['id'=> $review->id]) }}"><i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a>
                        <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $review->id }}"
                        data-name="{{ $review->productName }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Product slug</th>
                    <th>User's Rating</th>
                    <th>Overall Rating</th>
                    <th>Review Time</th>
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
            $('#review-list').DataTable();
        });

        $(document).on('click', '.deletebtn', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var token = $(this).data('token');
            swal({
                title: 'Are you sure?',
                text: "Delete this review forever!",
                type: 'Warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('backend.reviews.destroy') }}",
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