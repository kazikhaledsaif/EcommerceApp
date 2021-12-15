@extends('backend.layouts.app')

@section('title', 'Edit User')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User
            <small>{{ $user->first_name." ". $user->last_name}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href="#"><i class="fa fa-bandcamp"></i> User</a></li>
            <li class="active">Edit User</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.user.update') }}" method="post">
                    @csrf
                    <input type="hidden" class="form-control"  name="id" value="{{ $user->id }}" >

                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputCategoryName" class="col-sm-2 control-label">First name</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputCategoryName" name="first_name" value="{{ $user->first_name }}" >
                            </div>
                            <label for="inputCategoryName" class="col-sm-2 control-label">Last name</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputCategoryName" name="last_name" value="{{ $user->last_name }}" >
                            </div>
                        </div>
                        <div class="form-group">

                            <label for="inputCategoryName" class="col-sm-2 control-label">Phone</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputCategoryName" name="phone" value="{{ $user->phone }}" >
                            </div>
                            <label for="inputCategoryName" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputCategoryName" name="email" value="{{ $user->email  }}" required>
                            </div>
                        </div>
                        <div class="form-group">


                            <label for="inputCategoryName" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-6">
                                <textarea type="text" class="form-control" id="inputCategoryName" name="address"  >{{ $user->address  }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">

{{--                            <label for="inputCategoryName" class="col-sm-2 control-label">City</label>--}}

{{--                            <div class="col-sm-4">--}}
{{--                                <input type="text" class="form-control" id="inputCategoryName" name="first_name" value="{{ $user->country }}" required>--}}
{{--                            </div>--}}
                            <label for="inputCategoryName" class="col-sm-2 control-label">City</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputCategoryName" name="city" value="{{ $user->city  }}" >
                            </div>
                        </div>
                        <div class="form-group">

                            <label for="inputCategoryName" class="col-sm-2 control-label">State</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputCategoryName" name="state" value="{{ $user->state }}" >
                            </div>
                            <label for="inputCategoryName" class="col-sm-2 control-label">Zip</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputCategoryName" name="zip" value="{{ $user->zip  }}" >
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


@endsection
