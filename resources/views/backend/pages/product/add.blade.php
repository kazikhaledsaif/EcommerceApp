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
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.product.create') }}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputProductName" class="col-sm-2 control-label">Product Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputProductName" name="productName" placeholder="New Product.." required>
                            </div>
                            <label for="inputProductSlug" class="col-sm-1 control-label">Slug</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputProductSlug" name="productSlug" placeholder="Slug (auto generate)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDetail" name="productDetail" placeholder="Details" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPrice" class="col-sm-2 control-label">Price</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputPrice" min="1" name="productPresentPrice" placeholder="Present Price (required)" required>
                            </div>
                            <label for="inputPrice" class="col-sm-2 control-label">Discount Price</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputPrice" name="productDiscountPrice" placeholder="Discount Price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStock" class="col-sm-2 control-label">Stock</label>

                            <div class="col-sm-4">
                                <input type="number" min="0" class="form-control" id="inputStock" name="productStock" placeholder="Stock" required>
                            </div>

                                <label for="inputCategory" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-4">
                                <select class="form-control " id="inputCategory" name="productCategory">
                                    <option value="1">option 1</option>
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
                                <input type="number" min="0" class="form-control" id="inputPercentage" name="productDiscountPercentage" placeholder="Percentage off">
                            </div>
                            <label for="inputBadge" class="col-sm-2 control-label">Badge</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputBadge" placeholder="Badge" name="productBadge">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputDescription" name="productDescription"  placeholder="Product Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputFName" class="col-sm-2 control-label">Feature Name</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputFName" name="productFeatureName" placeholder="Feature Name">
                            </div>
                            <label for="inputColor" class="col-sm-2 control-label">Feature Color</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputColor" placeholder="Color" name="productFeatureColor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thumbImg" class="col-sm-2 control-label">Thumbnail Image</label>

                            <div class="col-sm-6">
                                <input type="file" class="form-control" id="thumbImg" placeholder="Thumbnail Image" name="productThumbImg">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="galleryImg" class="col-sm-2 control-label">Gallery Image</label>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image" name="productG1">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image" name="productG2">
                            </div>
                        </div>
                        <div class="form-group">

                        <div class="col-sm-2  control-label"> </div>

                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image" name="productG3">
                            </div>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" id="galleryImg" placeholder="Gallery Image" name="productG4">
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