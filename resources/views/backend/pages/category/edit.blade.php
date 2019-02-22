@extends('backend.layouts.app')

@section('title', 'Edit Category')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
             Category
            <small>Create a new category</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href="#"><i class="fa fa-bandcamp"></i> Category</a></li>
            <li class="active">Edit Category</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.category.update') }}" method="post">
                    @csrf
                    <input type="hidden" class="form-control"  name="id" value="{{ $category->id }}" >

                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputCategoryName" class="col-sm-2 control-label">Category Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputCategoryName" name="categoryName" value="{{ $category->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">

                            <label for="inputCatSlug" class="col-sm-2 control-label">Slug</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputCatSlug" name="categorySlug" value="{{ $category->slug }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="thumbImg" class="col-sm-2 control-label">Thumbnail Image</label>

                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="thumbImg" name="categoryThumbImg">
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


@section('script')
    <script>
        $('#inputCategoryName').on('input',function (e) {
            console.log($(this).val());
            $.get('{{ route('backend.category.slug') }}',
                { 'categoryName' : $(this).val() },
                function (data) {
                    $('#inputCatSlug').val(data.slug);
                }
            );

        });
    </script>

@endsection