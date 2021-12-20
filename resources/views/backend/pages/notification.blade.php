@extends('backend.layouts.app')
@section('title' , 'Notification')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Notification
            <small>Create a new Notification</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">New Notification</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.notification.create') }}" method="post"
                 enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputTitle1" class="col-sm-2 control-label">Title</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputTitle1" name="title" placeholder="Title .." required>
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputDetail" name="detail" placeholder="Details" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sliderImg" class="col-sm-2 control-label">Image</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="sliderImg" placeholder="Image" name="image">
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Send</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->

@endsection

