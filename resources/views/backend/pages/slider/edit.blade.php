@extends('backend.layouts.app')

@section('title' , 'Edit > '. $slider->name )

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update slider info
            <small>{{ $slider->name }} </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href=" {{ route('backend.slider.list') }}"><i class="fa fa-shopping-cart"></i> Slider</a></li>
            <li class="active">Edit Slider</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.slider.update') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" class="form-control" id="inputTitle1" name="id" value="{{ $slider->id }}" required>

                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputTitle1" class="col-sm-2 control-label">Title 1</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputTitle1" name="title1" value="{{ $slider->title1 }}" required>
                            </div>


                        </div>
                        <div class="form-group">

                            <label for="inputTitle2" class="col-sm-2 control-label">Title 2</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputTitle2" name="title2" value="{{ $slider->title2 }}" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDetail" name="detail" value="{{ $slider->detail }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sliderImg" class="col-sm-2 control-label">Slider Image</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="sliderImg" placeholder="Slider Image" name="slider">
                            </div>
                            <label for="slug" class="col-sm-2 control-label ">Slug</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $slider->slug }}">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Update</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>


    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script>
        $('#inputProductName').on('input',function (e) {
            // console.log($(this).val());
            $.get('{{ route('backend.product.slug') }}',
                { 'productName' : $(this).val() },
                function (data) {
                    $('#inputProductSlug').val(data.slug);
                }
            );

        });

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('inputDescription')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endsection
