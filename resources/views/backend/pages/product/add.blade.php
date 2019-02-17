@extends('backend.layouts.app')
@section('title' , 'New Product')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Product
            <small>Create a new product</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">New Product</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">

                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputProductName" class="col-sm-2 control-label">Product Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputProductName" placeholder="New Product.." required>
                            </div>
                            <label for="inputProductSlug" class="col-sm-1 control-label">Slug</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputProductSlug" placeholder="Slug (auto generate)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDetail" placeholder="Details" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPrice" class="col-sm-2 control-label">Price</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputPrice" min="1" placeholder="Present Price (required)" required>
                            </div>
                            <label for="inputPrice" class="col-sm-2 control-label">Discount Price</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputPrice" placeholder="Discount Price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStock" class="col-sm-2 control-label">Stock</label>

                            <div class="col-sm-4">
                                <input type="number" min="0" class="form-control" id="inputStock" placeholder="Stock" required>
                            </div>

                                <label for="inputCategory" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-4">
                                <select class="form-control " id="inputCategory">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                                </div>

                        </div>
                        <div class="form-group">
                            <label for="inputPercentage" class="col-sm-2 control-label">Discount Percentage</label>

                            <div class="col-sm-4">
                                <input type="number" min="0" class="form-control" id="inputPercentage" placeholder="Percentage off">
                            </div>
                            <label for="inputBadge" class="col-sm-2 control-label">Badge</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputBadge" placeholder="Badge">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-10">
                                <textarea name="" class="form-control" id="inputDescription"   placeholder="Product Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputFName" class="col-sm-2 control-label">Feature Name</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputFName" placeholder="Feature Name">
                            </div>
                            <label for="inputColor" class="col-sm-2 control-label">Feature Color</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputColor" placeholder="Color">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thumbImg" class="col-sm-2 control-label">Thumbnail Image</label>

                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="thumbImg" placeholder="Thumbnail Image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="galleryImg" class="col-sm-2 control-label">Gallery Image</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image">
                            </div>
                        </div>
                        <div class="form-group">

                        <div class="col-sm-2  control-label"> </div>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
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
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('inputDescription')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
    </script>
@endsection