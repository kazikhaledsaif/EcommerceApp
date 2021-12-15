@extends('backend.layouts.app')

@section('title' , 'Edit > '. $feature->name )

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Featured Category info
            <small>{{ $feature->name }} </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href=" {{ route('backend.product.list') }}"><i class="fa fa-shopping-cart"></i> Featured Category</a></li>
            <li class="active">Edit Feature category</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.featuredcategories.update') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control"  name="id" value="{{ $feature->id }}" >

                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputProductName" class="col-sm-2 control-label">Category </label>

                            <div class="col-sm-4">
                                <select class="form-control " id="inputCategory" name="productCategory">
                                    @foreach($category as $cat)
                                        <option  {{  $cat['slug'] == $feature->slug ?  "selected": ""  }} value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="thumbImg" class="col-sm-2 control-label">Thumbnail Image</label>

                            <div class="col-sm-6">
                                <img height=300 width=300 src="{{ !empty($feature->image)? asset('uploads/'.$feature->image) : asset('backend/dist/img/not-found.jpg')  }}">


                                <input type="file" class="form-control" id="thumbImg" name="img">
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

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('inputDescription')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endsection
