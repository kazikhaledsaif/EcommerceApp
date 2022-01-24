@extends('frontend.layouts.master')
@section('title' , 'MyAccount')
@section('content')


    <!--=============================================
    =            Breadcrumb Area         =
    =============================================-->
    <div class="breadcrumb-area breadcrumb-bg pt-85 pb-85" style="background-image:  url( {{ asset('/frontend/assets/images/doozo/shop-banner.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
{{--                    <div class="breadcrumb-container">--}}
{{--                        <ul>--}}
{{--                            <li><a href="{{ route('frontend.index') }}">Home</a> <span class="separator">/</span></li>--}}
{{--                            <li class="active">My Account</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
=            My Account page content         =
=============================================-->

    <div class="page-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>




                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>

                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                <a href="{{route('frontend.password-update')}}"><i class="fa fa-key"></i> Change Password</a>

                                <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout</a>
                                <form id="logout-form" action="{{ route('frontend.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->


                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        <div class="welcome mb-20">
                                            <p>Hello <strong>{{ Auth::guard('user')->user()->first_name ." ". Auth::guard('user')->user()->last_name }}</strong>  ,
                                        </div>

                                        <p class="mb-0">Thanks message here. <br> From your account dashboard. you can easily check &amp; view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            @if(!empty($orders))
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Order No.</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Tracking Id</th>
                                                    <th scope="col">See Full Order</th>

                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach ($orders as $key=>$order)
                                                    <tr data-toggle="collapse" data-target="#demo{{ $order->id }}"
                                                        class="accordion-toggle">
                                                        <td>{{$key+1}}</td>
                                                        <td>{{ $order->id}}</td>
                                                        <td>{{ $order->created_at}}</td>
                                                        <td>৳{{ $order->billing_total}}</td>
                                                        <td>{{ $order->status}}</td>
                                                        <td>{{ $order->shipping ? $order->shipping->tracker : "" }}</td>

                                                        <td scope="col">
                                                            <a  class="btn btn-default btn-sm">
                                                                <i class="fa fa-search-plus"></i>
                                                            </a>
                                                        </td>

                                                    <tr>
                                                        <td colspan="8" class="hiddenRow"><div class="accordian-body collapse"
                                                             id="demo{{$order->id}}">


                                                                <div class="table-responsive-lg">
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr  >
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Item Name</th>
                                                                            <th scope="col">Item Quantity</th>
                                                                            <th scope="col">Item Price</th>
                                                                            <th scope="col">Total Amount</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>


                                                                        @if(!empty($order->order_details))
                                                                            @foreach ($order->order_details as $key=>$order )
                                                                                <tr>

                                                                                    <td>{{$key+1}}</td>
                                                                                    <td>{{!empty($order->item) ? $order->item->name : '' }}</td>

                                                                                    <td>{{$order->quantity}}</td>
                                                                                    <td>{{$order->price}} ৳</td>
                                                                                    <td>{{ (float)$order->price * (int)$order->quantity }} ৳</td>


                                                                                </tr>
                                                                            @endforeach
                                                                        @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div> </td>
                                                    </tr>
                                                    </tr>
                                                @endforeach


                                                </tbody>
                                            </table>
                                            @else
                                                <p>No Orders available</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->


                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <form action="{{ route('frontend.my-account.store') }}" method="post">
                                            {{csrf_field()}}

                                            <h3>Billing Address</h3>

                                            <address>

                                                <p>Address: </p>
                                                <textarea name="address" cols="30" rows="4" class="form-control">{{  Auth::guard('user')->user()->address }}</textarea> <br>
                                                <p>Mobile:    <input type="text" name="mobile" class="form-control" value="{{ Auth::guard('user')->user()->phone }}"></p>

                                            </address>

                                            <button class="save-change-btn">Save Changes</button>

                                        </form>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>

                                        <div class="account-details-form">
                                            <form action="{{ route('frontend.my-account.store') }}" method="post">
                                                {{csrf_field()}}

                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="first-name" name="name" placeholder="First Name" type="text" value="{{  Auth::guard('user')->user()->first_name }}">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="last-name" name="lname" placeholder="Last Name" type="text" value="{{  Auth::guard('user')->user()->last_name }}">
                                                    </div>



                                                    <div class="col-12 mb-30">
                                                        <input id="email" name="email" placeholder="Email Address" type="email" value="{{  Auth::guard('user')->user()->email }}">
                                                    </div>


                                                    <div class="col-12">
                                                        <button class="save-change-btn">Save Changes</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=====  End of My Account page content  ======-->



@endsection()
