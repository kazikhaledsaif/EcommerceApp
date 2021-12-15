@extends('backend.layouts.app')
@section('title' , 'New Slider')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Featured Category
            <small>Create a new Featured Category</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">New Featured Category</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.featuredcategories.create') }}" method="post"
                 enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="sliderImg" class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-4">
                                <select class="form-control " id="inputCategory" name="productCategory" required>
                                    <option selected value="">Select category</option>
                                    @foreach($category as $cat)
                                        <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('productCategory'))
                                    <span class="text-red">
                                        <strong>{{ $errors->first('productCategory') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="sliderImg" class="col-sm-2 control-label">Image</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="sliderImg" placeholder="Image" name="image">

                                @if ($errors->has('image'))
                                    <span class="text-red">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Create</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->

@endsection

