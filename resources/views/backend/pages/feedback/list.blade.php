@extends('backend.layouts.app')

@section('title', 'Feedback list')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Feedback
            <small> </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Feedback</li>
        </ol>
    </section>

    <div class="box">
        <div class="box-header">


            <div class="col-md-6 ">
{{--                <a href="#" class="btn btn-success">Download csv</a>--}}
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Posted at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feedback as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->subject }}</td>
                        <td>{{ $feedback->created_at }}</td>
                        <td>
                            <a href="{{ route('backend.feedback.show',['id'=> $feedback->id]) }}"><i class="fa fa-envelope-open fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a>&nbsp;&nbsp;
                            <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $feedback->id }}"
                                          data-name="{{ $feedback->mail }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Posted at</th>
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
            $('.feedback').addClass('active');

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
                        url: "{{ route('backend.feedback.destroy') }}",
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
