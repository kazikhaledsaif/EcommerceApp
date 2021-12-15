@extends('backend.layouts.app')

@section('title' , 'Edit > '. $product->name )

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Product info
            <small>{{ $product->name }} </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href=" {{ route('backend.product.list') }}"><i class="fa fa-shopping-cart"></i> Product</a></li>
            <li class="active">Edit Product</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.product.update') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="id" value="{{ $product->id }}">

                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputProductName" class="col-sm-2 control-label">Product Name</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputProductName" name="productName"
                                       value="{{ $product->name }}">
                            </div>
                            <label for="inputProductSlug" class="col-sm-1 control-label">Slug</label>

                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="inputProductSlug" name="productSlug"
                                       value="{{ $product->slug }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDetail" class="col-sm-2 control-label">Details</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputDetail" name="productDetail"
                                       value="{{ $product->details }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPrice" class="col-sm-2 control-label">Price</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputPrice" min="1"
                                       name="productPresentPrice" value="{{ $product->regular_price }}">
                            </div>
                            <label for="inputDPrice" class="col-sm-2 control-label">Discount Price</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="inputDPrice" name="productDiscountPrice"
                                       value="{{ $product->discount_price }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStock" class="col-sm-2 control-label">Stock</label>

                            <div class="col-sm-4">
                                <input type="number" min="0" class="form-control" id="inputStock" name="productStock"
                                       value="{{ $product->stock }}">
                            </div>

                            <label for="inputCategory" class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-4">
                                <select class="form-control " id="inputCategory" name="productCategory">
                                    @foreach($category as $cat)
                                        <option  {{  $cat['id'] == $product->category_id ?  "selected": ""  }} value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputPercentage" class="col-sm-2 control-label">Discount Percentage</label>

                            <div class="col-sm-4">
                                <input type="number" min="0" class="form-control" id="inputPercentage"
                                       name="productDiscountPercentage" value="{{ $product->percentage }}">
                            </div>
                            <label for="inputBadge" class="col-sm-2 control-label">Badge</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputBadge" value="{{ $product->badge }}"
                                       name="productBadge">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMaxItem" class="col-sm-2 control-label">Per User Max Item</label>

                            <div class="col-sm-4">
                                <input type="number" min="0" class="form-control" id="inputMaxItem"
                                {{ $product->per_user_max_item }}    name="inputMaxItem" placeholder="Left blank for unlimited">
                         </div>

                     </div>
                     <div class="form-group">
                         <label for="inputDescription" class="col-sm-2 control-label">Description</label>

                         <div class="col-sm-10">
                             <textarea class="form-control" id="inputDescription"
                                       name="productDescription">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group date">
                            <label for="inputFName" class="col-sm-2 control-label">Feature Name</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputFName" name="productFeatureName"
                                   value="{{ $product->feature_name }}"    placeholder="Feature Name">
                            </div>
                            <label for="inputColor" class="col-sm-2 control-label">Feature Color</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputColor" placeholder="Color"
                                       value="{{ $product->feature_color }}"      name="productFeatureColor">
                            </div>

                            <label for="datepicker" class="col-sm-2 control-label">Weekly Deal</label>

                            <div class="col-sm-2 ">
                                <input type="date" class="form-control" id="datepicker" placeholder="Weekly deal"
                                       value="{{date('Y-m-d', strtotime($product->weekly_deal))   }}"   name="productWeeklyDeal">
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="thumbImg" class="col-sm-2 control-label">Thumbnail Image</label>

                                <div class="col-sm-6">
                                    <img height=300 width=300 src="{{ !empty($product->product_image)? asset('uploads/'.$product->product_image) : asset('backend/dist/img/not-found.jpg')  }}">

                                    <input type="file" class="form-control" id="thumbImg" name="productThumbImg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="galleryImg" class="col-sm-2 control-label">Gallery Image</label>

                                <div class="col-sm-4">
                                    <img height=300 width=300 src="{{ !empty($product->gallery_image1)? asset('uploads/'.$product->gallery_image1) : asset('backend/dist/img/not-found.jpg')  }}">

                                    <input type="file" class="form-control" id="galleryImg"
                                           placeholder="Gallery Image" name="productG1">
                                </div>
                                <div class="col-sm-4">
                                    <img height=300 width=300 src="{{ !empty($product->gallery_image2)? asset('uploads/'.$product->gallery_image2) : asset('backend/dist/img/not-found.jpg')  }}">

                                    <input type="file" class="form-control" id="galleryImg"
                                           placeholder="Gallery Image" name="productG2">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-2  control-label"></div>

                                <div class="col-sm-4">
                                    <img height=300 width=300 src="{{ !empty($product->gallery_image3)? asset('uploads/'.$product->gallery_image3) : asset('backend/dist/img/not-found.jpg')  }}">

                                    <input type="file" class="form-control" id="galleryImg"
                                           placeholder="Gallery Image" name="productG3">
                                </div>
                                <div class="col-sm-4">
                                    <img height=300 width=300 src="{{ !empty($product->gallery_image4)? asset('uploads/'.$product->gallery_image4) : asset('backend/dist/img/not-found.jpg')  }}">

                                    <input type="file" class="form-control" id="galleryImg"
                                           placeholder="Gallery Image" name="productG4">
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
        $('#inputProductName').on('input', function (e) {
            // console.log($(this).val());
            $.get('{{ route('backend.product.slug') }}',
                {'productName': $(this).val()},
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
