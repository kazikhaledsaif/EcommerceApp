@extends('backend.layouts.app')

@section('title', 'Reviews details')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product's Reviews
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Product's Reviews </li>
        </ol>
    </section>

    <div class="box">

        <div class="box-body">
        {{--@foreach($review as $review) @endforeach--}}

            <h4>Reviews of <cite>" {{ $review->productName }} "</cite></h4>

            <div class="row">
            <div class="col-md-8">
                <div class="box">
                <div class="box-body">

                    <h4>User Detail:</h4>

                    Name: {{ $review->userName }} <br>
                    Email: {{ $review->email }} <br>
                    Registered on: {{ date('F j, Y', strtotime($review->regDate))  }} <br>
                    <br>

                    <h4>Review Detail:</h4>
                    Review Time: {{ date('F j, Y, g:i:s a', strtotime( $review->created_at)) }} <br>

                    Rating: <strong>{{ $review->rating }}  / 5 </strong> <br>
                    Comment: <pre>{{ $review->comment }} </pre> <br>


                </div>
            </div>
            </div>
                <div class="col-md-4">

                <div class="box box-body">
                    <h4>Product Details:</h4>
                    <img src="{{ asset('uploads/'.$review->productImage)  }}" width="240" height="200"
                         alt="" class="card-img-top">
                </div>
                    <div class="box-footer">
                        Name: {{ $review->productName }} <br>
                        Slug: {{ $review->slug }} <br>
                        Overall Rating: <span>{{ $review->overallRating }}</span> <br>
                    </div>

                </div>

            </div>
            </div>


            </div>


    </div>

@endsection