@extends('backend.layouts.app')

@section('title', 'Slider list')

@section('content')

    <div class="box">
        <div class="box-header">
            <div class="col-md-3">
                <h3 class="box-title">Slider list</h3>
            </div>

            <div class="col-md-6 ">
                <a href="{{ route('backend.slider.add') }}" class="btn btn-success">Add Slider</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="product-list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Title 1</th>
                    <th>Title 2</th>
                    <th>Detail</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $slider->title1 }}</td>
                    <td>{{ $slider->title2 }}</td>
                    <td>{{ $slider->detail }}</td>
                    <td><img height=100 width=100 src="{{ asset('uploads/'.$slider->img)  }}"> </td>
                    <td>{{ $slider->slug }}</td>
                    <td>
                        <a href="{{ route('frontend.shop.show',['id'=> $slider->id]) }}"><i class="fa fa-search-plus fa-lg" style="color:green" aria-hidden="true"></i> </a>
                        <a href="{{ route('backend.slider.edit',['id'=> $slider->id]) }}"><i class="fa fa-pencil-square fa-lg" style="color:dodgerblue" aria-hidden="true"></i> </a>
                        <a href=""><i class="fa fa-trash fa-lg deletebtn" data-id="{{ $slider->id }}"
                                      data-name="{{ $slider->id }}" data-token="{{ @csrf_token() }}" style="color:red"></i> </a>
                    </td>

                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Title 1</th>
                    <th>Title 2</th>
                    <th>Detail</th>
                    <th>Image</th>
                    <th>Slug</th>
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
                        url: "{{ route('backend.slider.destroy') }}",
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