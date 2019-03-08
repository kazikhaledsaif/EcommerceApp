@extends('frontend.layouts.master')
@section('title' , 'Post')
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
                            <li class="active">Blog Post</li>
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
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  sidebar  =======-->

                    <div class="sidebar-container shop-sidebar-container">
                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget mb-30">
                            <h3 class="sidebar-title">Search</h3>
                            <!--=======  search box  =======-->

                            <div class="sidebar-search-box">
                                <input type="search" placeholder="Search" >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>

                            <!--=======  End of search box  =======-->
                        </div>

                        <!--=======  End of single widget  =======-->

                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget mb-30">
                            <h3 class="sidebar-title">Categories</h3>
                            <!--=======  category dropdown  =======-->
                            <ul class="category-dropdown">
                                <li class="has-children">
                                    <a href="shop-left-sidebar.html">Living Chairs</a>
                                    <ul>
                                        <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                        <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="shop-left-sidebar.html">Sofa</a>
                                    <ul>
                                        <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                        <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-left-sidebar.html">Storage</a></li>
                            </ul>
                            <!--=======  End of category dropdown  =======-->
                        </div>

                        <!--=======  End of single widget  =======-->

                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget mb-30">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <!--=======  block container  =======-->

                            <div class="block-container">

                                <!--=======  single block  =======-->

                                <div class="single-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-image-format.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/small-01.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><a href="blog-post-image-format.html">The biggest lie in furniture</a> <span>APRIL 24, 2018</span></p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                                <!--=======  single block  =======-->

                                <div class="single-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-image-gallery.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/small-02.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><a href="blog-post-image-gallery.html">How to improve furniture quality</a> <span>APRIL 24, 2018</span></p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                                <!--=======  single block  =======-->

                                <div class="single-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-audio-format.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/small-03.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><a href="blog-post-audio-format.html">101 ideas for furniture</a> <span>APRIL 24, 2018</span></p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                                <!--=======  single block  =======-->

                                <div class="single-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-video-format.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/small-04.jpg') }} " class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><a href="blog-post-video-format.html">No more mistakes with furniture</a> <span>APRIL 24, 2018</span></p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                            </div>

                            <!--=======  End of block container  =======-->
                        </div>

                        <!--=======  End of single widget  =======-->

                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget mb-30">
                            <h3 class="sidebar-title">Recent Comments</h3>

                            <!--=======  block container  =======-->

                            <div class="block-container">

                                <!--=======  single block  =======-->

                                <div class="single-block comment-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-image-format.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/comment-icon.png') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><span>Admin Says</span>  <a href="blog-post-image-format.html">The biggest lie in furniture</a></p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                                <!--=======  single block  =======-->

                                <div class="single-block comment-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-image-gallery.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/comment-icon.png') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><span>Admin Says</span><a href="blog-post-image-gallery.html">How to improve furniture quality</a></p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                                <!--=======  single block  =======-->

                                <div class="single-block comment-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-audio-format.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/comment-icon.png') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><span>Admin Says</span><a href="blog-post-audio-format.html">101 ideas for furniture</a></p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                                <!--=======  single block  =======-->

                                <div class="single-block comment-block d-flex">
                                    <div class="image">
                                        <a href="blog-post-video-format.html">
                                            <img src="{{ asset('frontend/assets/images/blog-image/comment-icon.png') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><span>Admin Says</span><a href="blog-post-video-format.html">No more mistakes with furniture</a> </p>
                                    </div>
                                </div>

                                <!--=======  End of single block  =======-->

                            </div>

                            <!--=======  End of block container  =======-->

                        </div>

                        <!--=======  End of single widget  =======-->


                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget">
                            <h3 class="sidebar-title">Tags</h3>
                            <!--=======  tag container  =======-->

                            <ul class="tag-container">
                                <li><a href="#">new</a> </li>
                                <li><a href="#">chair</a> </li>
                                <li><a href="#">new</a> </li>
                                <li><a href="#">furniture</a> </li>
                                <li><a href="#">Accessories</a> </li>
                            </ul>

                            <!--=======  End of tag container  =======-->
                        </div>

                        <!--=======  End of single widget  =======-->

                    </div>

                    <!--=======  End of sidebar  =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  blog post container  =======-->

                    <div class="blog-single-post-container mb-80">

                        <!--=======  post title  =======-->


                        <h3 class="post-title">The biggest lie in furniture</h3>

                        <!--=======  End of post title  =======-->


                        <!--=======  Post meta  =======-->
                        <div class="post-meta">
                            <p><span><i class="fa fa-user-circle"></i> Posted By: </span> <a href="#">admin</a> <span class="separator">/</span> <span><i class="fa fa-calendar"></i> Posted On: <a href="#">24 August, 2018</a></span></p>
                        </div>

                        <!--=======  End of Post meta  =======-->

                        <!--=======  Post media  =======-->

                        <div class="single-blog-post-media mb-xs-20">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/images/blog-image/01.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>

                        <!--=======  End of Post media  =======-->

                        <!--=======  Post content  =======-->

                        <div class="post-content mb-40">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, ut, numquam voluptatem quas cum!</p>

                            <blockquote>
                                <p>ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! VitaeLorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor.</p>
                            </blockquote>

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, u Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, ut, numquam voluptatem quas cum!</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, ipsum deleniti repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, ut, numquam voluptatem quas cum! repellendus nam deserunt vitae ullam amet quos! Nesciunt, quo. Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, vitae numquam! Vitae alias ullam voluptatibus asperiores fugit ea soluta consectetur adipisci enim, impedit odit quisquam, ut, numquam voluptatem quas cum!</p>
                        </div>

                        <!--=======  End of Post content  =======-->

                        <!--=======  Tags area  =======-->

                        <div class="tag-area mb-40">
                            <span>Tags: </span>
                            <ul>
                                <li><a href="#">Image</a>,</li>
                                <li><a href="#">Furniture</a></li>
                            </ul>
                        </div>

                        <!--=======  End of Tags area  =======-->


                        <!--=======  Share post area  =======-->

                        <div class="social-share-buttons mb-40">
                            <h3>share this post</h3>
                            <ul>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                        <!--=====  End of Share post area  ======-->

                        <!--=======  related post  =======-->

                        <div class="related-post-container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="related-post-title mb-30">RELATED POSTS</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 mb-sm-20">
                                    <!--=======  single related post  =======-->

                                    <div class="single-related-post">
                                        <div class="image">
                                            <a href="blog-post-image-format.html">
                                                <img src="{{ asset('frontend/assets/images/blog-image/01.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h3 class="related-post-title">
                                                <a href="blog-post-image-format.html">The biggest lie in furniture</a>
                                                <span>April 24, 2018</span>
                                            </h3>
                                        </div>
                                    </div>

                                    <!--=======  End of single related post  =======-->
                                </div>
                                <div class="col-lg-4 col-md-4 mb-sm-20">
                                    <!--=======  single related post  =======-->

                                    <div class="single-related-post">
                                        <div class="image">
                                            <a href="blog-post-image-gallery.html">
                                                <img src="{{ asset('frontend/assets/images/blog-image/02.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h3 class="related-post-title">
                                                <a href="blog-post-image-gallery.html">How to improve furniture quality</a>
                                                <span>April 24, 2018</span>
                                            </h3>
                                        </div>
                                    </div>

                                    <!--=======  End of single related post  =======-->
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <!--=======  single related post  =======-->

                                    <div class="single-related-post">
                                        <div class="image">
                                            <a href="blog-post-audio-format.html">
                                                <img src="{{ asset('frontend/assets/images/blog-image/03.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h3 class="related-post-title">
                                                <a href="blog-post-audio-format.html">101 ideas for furniture</a>
                                                <span>April 24, 2018</span>
                                            </h3>
                                        </div>
                                    </div>

                                    <!--=======  End of single related post  =======-->
                                </div>
                            </div>
                        </div>

                        <!--=======  End of related post  =======-->

                    </div>

                    <!--=======  End of blog post container  =======-->

                    <!--=============================================
                    =            Comment section         =
                    =============================================-->

                    <div class="comment-section mb-md-80 mb-sm-80">
                        <h3 class="comment-counter">4 COMMENTS</h3>

                        <!--=======  comment container  =======-->

                        <div class="comment-container mb-40">
                            <!--=======  single comment  =======-->

                            <div class="single-comment">
                                <span class="reply-btn"><a href="#">Reply</a></span>

                                <div class="image">
                                    <img src="{{ asset('frontend/assets/images/blog-image/comment-icon.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h3 class="user">admin <span class="comment-time">April 28, 2018 at 3:09 am</span></h3>
                                    <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quia rem dolorem et rerum est laudantium eum dolores omnis perspiciatis.</p>
                                </div>

                            </div>

                            <!--=======  End of single comment  =======-->

                            <!--=======  single reply comment  =======-->

                            <div class="single-comment reply-comment">
                                <span class="reply-btn"><a href="#">Reply</a></span>

                                <div class="image">
                                    <img src="{{ asset('frontend/assets/images/blog-image/comment-icon.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h3 class="user">admin <span class="comment-time">April 28, 2018 at 3:09 am</span></h3>
                                    <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quia rem dolorem et rerum est laudantium eum dolores omnis perspiciatis.</p>
                                </div>

                            </div>

                            <!--=======  End of single reply comment  =======-->

                            <!--=======  single comment  =======-->

                            <div class="single-comment">
                                <span class="reply-btn"><a href="#">Reply</a></span>

                                <div class="image">
                                    <img src="{{ asset('frontend/assets/images/blog-image/comment-icon.png') }} " alt="">
                                </div>
                                <div class="content">
                                    <h3 class="user">admin <span class="comment-time">April 28, 2018 at 3:09 am</span></h3>
                                    <p class="comment-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quia rem dolorem et rerum est laudantium eum dolores omnis perspiciatis.</p>
                                </div>

                            </div>

                            <!--=======  End of single comment  =======-->



                        </div>

                        <!--=======  End of comment container  =======-->

                        <!--=======  comment form container  =======-->

                        <div class="comment-form-container">
                            <h3 class="comment-form-title">LEAVE A REPLY</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>

                            <!--=======  comment form  =======-->

                            <div class="comment-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Comment</label>
                                                <textarea name="commentMessage" id="commentMessage"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" name="commenterName">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="text" name="commenterEmail">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" name="commenterWebsite">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="pataku-btn" name="submit">post comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!--=======  End of comment form  =======-->
                        </div>

                        <!--=======  End of comment form container  =======-->

                    </div>


                    <!--=====  End of Comment section  ======-->

                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Blog Page Container  ======-->






@endsection()