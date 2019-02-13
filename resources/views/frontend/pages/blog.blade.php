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
                            <li><a href="index.html">Home</a> <span class="separator">/</span></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
        =            Blog Page Container         =
        =============================================-->

    <div class="blog-page-container mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  blog post container  =======-->

                    <div class="blog-post-container mb-15">

                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="image">
                                                    <a href="blog-post-image-format.html">
                                                        <img src="{{ asset('frontend/assets/images/blog-image/01.jpg') }} " class="img-fluid" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-image-format.html"> The biggest lie in furniture</a></h3>
                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> <a href="#">24 August, 2018</a></span></p>
                                                </div>

                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-image-format.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post gallery-type-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="blog-image-gallery">
                                                    <div class="single-image">
                                                        <a href="blog-post-image-gallery.html"><img src="{{ asset('frontend/assets/images/blog-image/02.jpg') }}" class="img-fluid" alt=""></a>
                                                    </div>

                                                    <div class="single-image">
                                                        <a href="blog-post-image-gallery.html"><img src="{{ asset('frontend/assets/images/blog-image/01.jpg') }}" class="img-fluid" alt=""></a>
                                                    </div>

                                                    <div class="single-image">
                                                        <a href="blog-post-image-gallery.html"><img src="{{ asset('frontend/assets/images/blog-image/03.jpg') }} " class="img-fluid" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-image-gallery.html"> How to improve furniture quality</a></h3>
                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> <a href="#">24 August, 2018</a></span></p>
                                                </div>

                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-image-gallery.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="post-audio embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" width="500"   allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-audio-format.html"> 101 ideas for furniture</a></h3>

                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> <a href="#">24 August, 2018</a></span></p>
                                                </div>

                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-audio-format.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="video embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" width="560"  src="https://www.youtube.com/embed/tvPnrfQCiCo"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-video-format.html"> No more mistakes with furniture</a></h3>
                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i><a href="#">24 August, 2018</a></span></p>
                                                </div>

                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-video-format.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="image">
                                                    <a href="blog-post-image-format.html"><img src="{{ asset('frontend/assets/images/blog-image/01.jpg') }} " class="img-fluid" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-image-format.html"> The biggest lie in furniture</a></h3>
                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> <a href="#">24 August, 2018</a></span></p>
                                                </div>

                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-image-format.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post gallery-type-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="blog-image-gallery">
                                                    <div class="single-image">
                                                        <a href="blog-post-image-gallery.html"><img src="{{ asset('frontend/assets/images/blog-image/02.jpg') }}" class="img-fluid" alt=""></a>
                                                    </div>

                                                    <div class="single-image">
                                                        <a href="blog-post-image-gallery.html"><img src="{{ asset('frontend/assets/images/blog-image/01.jpg') }}" class="img-fluid" alt=""></a>
                                                    </div>

                                                    <div class="single-image">
                                                        <a href="blog-post-image-gallery.html"><img src="{{ asset('frontend/assets/images/blog-image/03.jpg') }}" class="img-fluid" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-image-gallery.html"> How to improve furniture quality</a></h3>
                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> <a href="#">24 August, 2018</a></span></p>
                                                </div>

                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-image-gallery.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="post-audio embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" width="500"   allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-audio-format.html"> 101 ideas for furniture</a></h3>

                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> <a href="#">24 August, 2018</a></span></p>
                                                </div>



                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-audio-format.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!--=======  single blog post  =======-->

                                <div class="single-blog-post mb-35">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-media mb-20">
                                                <div class="video embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" width="560"  src="https://www.youtube.com/embed/tvPnrfQCiCo"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-blog-post-content">
                                                <h3 class="post-title"> <a href="blog-post-video-format.html"> No more mistakes with furniture</a></h3>
                                                <div class="post-meta">
                                                    <p><span><i class="fa fa-user-circle"></i> </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i><a href="#">24 August, 2018</a></span></p>
                                                </div>

                                                <p class="post-excerpt">
                                                    Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus.
                                                </p>
                                                <a href="blog-post-video-format.html" class="blog-readmore-btn">continue <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--=======  End of single blog post  =======-->
                            </div>
                        </div>
                    </div>

                    <!--=======  End of blog post container  =======-->

                    <!--=======  Pagination container  =======-->

                    <div class="pagination-container pb-20 mb-md-80 mb-sm-80">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--=======  pagination-content  =======-->

                                    <div class="pagination-content text-center">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">Next <i class="fa fa-angle-right"></i> </a></li>
                                        </ul>
                                    </div>

                                    <!--=======  End of pagination-content  =======-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of Pagination container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Blog Page Container  ======-->









@endsection()