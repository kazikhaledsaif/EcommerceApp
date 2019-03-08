@extends('backend.layouts.app')
@section('title' , 'New Slider')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Slider
            <small>Create a new Slider</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">New Slider</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.slider.create') }}" method="post"
                 enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputTitle1" class="col-sm-2 control-label">Title 1</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputTitle1" name="title1" placeholder="Title 1.." required>
                            </div>


                        </div>
                        <div class="form-group">

                            <label for="inputTitle2" class="col-sm-2 control-label">Title 2</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputTitle2" name="title2" placeholder="Title 2.." required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDetail" name="detail" placeholder="Details" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sliderImg" class="col-sm-2 control-label">Slider Image</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="sliderImg" placeholder="Slider Image" name="slider">
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

