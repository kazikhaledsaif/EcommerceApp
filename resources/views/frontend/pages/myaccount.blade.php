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
                            <li><a href="{{ route('frontend.index') }}">Home</a> <span class="separator">/</span></li>
                            <li class="active">My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->

    @if(session()->has('success_message'))
        <div class="alert alert-success">
            <h4> {{session()->get('success_message')}}</h4>
        </div><br><br>

    @elseif(session()->has('error_massage'))
        <div class="alert alert-danger">
            <h4> {{session()->get('error_massage')}}</h4>
        </div><br><br>
    @elseif(session()->has('alert_massage'))
        <div class="alert alert-info">
            <h4> {{session()->get('alert_massage')}}</h4>
        </div><br><br>
    @endif

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
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                                            <p>Hello <strong>{{ Auth::user()->name }}</strong>  ,
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
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Order No.</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ 1+$loop->index }}</td>
                                                        <td>{{ 1000+$order->id}}</td>
                                                        <td>{{ $order->created_at}}</td>
                                                        <td>${{ $order->billing_total}}</td>
                                                        <td>{{ $order->status}}</td>
                                                        <td><a class="btn" onclick="window.location.href='/invoice/{{  substr(md5('muaj'.$order->id.'saif'), 16, 31)}}'">View/ Download</a>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                                </tbody>
                                            </table>
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
                                                <textarea name="address" cols="30" rows="4" class="form-control">{{ Auth::user()->address }}</textarea> <br>
                                                <p>Mobile:    <input type="text" name="mobile" class="form-control" value="{{ Auth::user()->mobile }}"></p>

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
                                                        <input id="first-name" name="name" placeholder="First Name" type="text" value="{{ Auth::user()->name }}">
                                                    </div>

                                                    <div class="col-lg-6 col-12 mb-30">
                                                        <input id="last-name" name="lname" placeholder="Last Name" type="text" value="{{ Auth::user()->lname }}">
                                                    </div>



                                                    <div class="col-12 mb-30">
                                                        <input id="email" name="email" placeholder="Email Address" type="email" value="{{ Auth::user()->email }}">
                                                    </div>

                                                    {{--   <div class="col-12 mb-30"><h4>Password change</h4></div>

                                                       <div class="col-12 mb-30">
                                                           <input name="current_password" id="current-pwd" placeholder="Current Password" type="password">
                                                       </div>


                                                       <div class="col-lg-6 col-12 mb-30">
                                                           <input name="new_password" id="new-pwd" placeholder="New Password" type="password">
                                                       </div>

                                                       <div class="col-lg-6 col-12 mb-30">
                                                           <input name="verify_password" id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                       </div>--}}

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