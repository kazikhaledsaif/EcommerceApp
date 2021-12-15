@extends('frontend.layouts.master')

@section('content')

    <!--=============================================
=            Breadcrumb Area         =
=============================================-->

<div class="breadcrumb-area breadcrumb-bg pt-85 pb-85 mb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-container">
                    <ul>
                        <li><a href="#">Home</a> <span class="separator">/</span></li>
                        <li class="active">Compare</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=====  End of Breadcrumb Area  ======-->


<!--=============================================
=            Compare page content         =
=============================================-->

<div class="page-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">

                    <!-- Compare Table -->
                    <div class="compare-table table-responsive">
                        <table class="table mb-0">
                            <tbody>
                            <tr>
                                <td class="first-column">Product</td>
                                <td class="product-image-title">
                                    <a href="#" class="image"><img src="{{ asset('frontend/assets/images/products/product01.jpg') }} " class="img-fluid" alt="Compare Product"></a>
                                    <a href="#" class="category">Vegetable</a>
                                    <a href="#" class="title">Cillum dolore tortor nisl fermentum</a>
                                </td>
                                <td class="product-image-title">
                                    <a href="#" class="image"><img src="{{ asset('frontend/assets/images/products/product02.jpg') }}" class="img-fluid" alt="Compare Product"></a>
                                    <a href="#" class="category">Fruit</a>
                                    <a href="#" class="title">Auctor gravida pellentesque Lorem, ipsum dolor</a>
                                </td>
                                <td class="product-image-title">
                                    <a href="#" class="image"><img src="{{ asset('frontend/assets/images/products/product03.jpg') }} " class="img-fluid" alt="Compare Product"></a>
                                    <a href="#" class="category">Frozen</a>
                                    <a href="#" class="title">Condimentum posuere consectetur</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="first-column">Description</td>
                                <td class="pro-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veritatis culpa asperiores fugit omnis ducimus ullam facilis magnam quo vitae.</p></td>
                                <td class="pro-desc"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, ab assumenda. Sunt accusantium quae porro repellendus sed totam deserunt autem!</p></td>
                                <td class="pro-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, ad! Natus dolor voluptates, veniam provident vitae consequuntur adipisci expedita est!</p></td>
                            </tr>
                            <tr>
                                <td class="first-column">Price</td>
                                <td class="pro-price">$29</td>
                                <td class="pro-price">$27</td>
                                <td class="pro-price">$39</td>
                            </tr>
                            <tr>
                                <td class="first-column">Color</td>
                                <td class="pro-color">Yellow</td>
                                <td class="pro-color">White</td>
                                <td class="pro-color">Green</td>
                            </tr>
                            <tr>
                                <td class="first-column">Stock</td>
                                <td class="pro-stock">In Stock</td>
                                <td class="pro-stock">In Stock</td>
                                <td class="pro-stock">In Stock</td>
                            </tr>
                            <tr>
                                <td class="first-column">Add to cart</td>
                                <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><i class="fa fa-shopping-cart"></i><span>ADD TO CART</span></a></td>
                                <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span><i class="fa fa-shopping-cart"></i> ADD TO CART</span></a></td>
                                <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span><i class="fa fa-shopping-cart"></i> ADD TO CART</span></a></td>
                            </tr>
                            <tr>
                                <td class="first-column">Delete</td>
                                <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                            </tr>
                            <tr>
                                <td class="first-column">Rating</td>
                                <td class="pro-ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </td>
                                <td class="pro-ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </td>
                                <td class="pro-ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<!--=====  End of Compare page content  ======-->

@endsection()
