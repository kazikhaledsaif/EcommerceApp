@extends('frontend.layouts.master')
@section('title' , 'Wishlist')
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
                            <li><a href="index.html">Home</a> <span class="separator">/</span></li>
                            <li class="active">Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
    =            Wishlist page content         =
    =============================================-->
    @if(Cart::instance('wishlist')->count()>0)
        <div  class="container">
            <h4>{{Cart::instance('wishlist')->count()}} item(s) in Wishlist</h4><br><br>
        </div>
        <div class="page-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!--=======  cart table  =======-->

                        <div class="cart-table table-responsive mb-40">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::instance('wishlist')->content() as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="{{ route('frontend.shop.show',$item->model->slug) }}"><img src="{{ asset('uploads/'.$item->model->product_image)  }} " class="img-fluid" alt="Product"></a></td>
                                        <td class="pro-title"><a href="{{ route('frontend.shop.show',$item->model->slug) }}">{{$item->model->name}}</a></td>


                                        @if( $item->model->discount_price == 0 )


                                            <td class="pro-price"><span>${{$item->model->present_price}}</span></td>
                                        @else
                                            <td class="pro-price"><span>${{$item->model->discount_price}}</span></td>

                                        @endif

                                        <td class="pro-remove"><a href="{{route('frontend.wishlist.destroy', $item->rowId)}}"><i class="fa fa-trash-o"></i></a></td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!--=======  End of cart table  =======-->



                    </div>
                </div>
            </div>
        </div>

        <!--=====  End of Wishlist page content  ======-->
    @else

        <div  class="container">
            <h4>No items in Wishlist!</h4><br><br>
        </div>

    @endif
    <!--=====  End of Wishlist page content  ======-->





@endsection()