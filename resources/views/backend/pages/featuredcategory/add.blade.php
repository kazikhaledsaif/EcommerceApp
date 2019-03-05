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

                            <label for="inputTitle1" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputTitle1" name="name" placeholder="Name.." required>
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="sliderImg" class="col-sm-2 control-label">Image</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="sliderImg" placeholder="Image" name="image">
                            </div>
                            <label for="slug" class="col-sm-2 control-label ">Slug</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="#" class="btn btn-default">Cancel</a>
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

