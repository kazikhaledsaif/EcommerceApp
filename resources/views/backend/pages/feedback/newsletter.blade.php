@extends('backend.layouts.app')

@section('title', 'Newsletter list')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Newsletter
            <small>You can download as csv</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Newsletter</li>
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
            <table id="list" class="table table-bordered  table-responsive table-hover" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($newsletters as $newsletter)
                    <tr>
                        <td>{{ $newsletter->id }}</td>
                        <td> {{ $newsletter->mail }}</td>
                        {{--<td>{{ $newsletter->status }}</td>    --}}
                            @if($newsletter->status == 1)
                                <td><span class="alert-success">&nbsp; Subscribed &nbsp;</span></td>
                            @else
                            <td><span class="alert-warning">&nbsp; Unsubscribed &nbsp;</span> </td>
                            @endif

                        <td>
{{--                            <a href="{{ route('backend.slider.edit',['id'=> $newsletter->id]) }}"><i class="fa fa-envelope-open fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a> &nbsp;&nbsp;--}}
                            <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $newsletter->id }}"
                                          data-name="{{ $newsletter->mail }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Status</th>
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
            $('.newsletter').addClass('active');

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
                        url: "{{ route('backend.newsletter.destroy') }}",
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
