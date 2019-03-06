<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
 * to make new conttoller command
php artisan make:controller Frontend/IndexController --resource
*/

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::name('backend.')
    ->namespace('Backend')
    ->prefix('admin')
    ->middleware('role:admin')
    ->group(function (){

        //write your routes for backend
        Route::get('/', 'DashboardController@index')->name('dashboard');
//        products route
        Route::get('/products', 'ProductController@index')->name('product.list');
        Route::get('/product-add', 'ProductController@create')->name('product.add');
        Route::get('/product-edit/{id}', 'ProductController@edit')->name('product.edit');
//        for slug generation
        Route::get('/check_slug', 'ProductController@check_slug')->name('product.slug');
//        product create
        Route::post('/product-create', 'ProductController@store')->name('product.create');
        Route::post('/product-update', 'ProductController@update')->name('product.update');
        Route::post('/product-destroy', 'ProductController@destroy')->name('product.destroy');


//        category route
        Route::get('/category', 'CategoryController@index')->name('category.list');
        Route::get('/category-add', 'CategoryController@create')->name('category.add');
        Route::post('/category-create', 'CategoryController@store')->name('category.create');
        Route::get('/category-edit/{id}', 'CategoryController@edit')->name('category.edit');
        Route::post('/category-update', 'CategoryController@update')->name('category.update');
        Route::get('/category_slug', 'CategoryController@check_slug')->name('category.slug');

//        Order's route
        Route::get('/order','OrderController@index')->name('order.list');
        Route::get('/order/{id}','OrderController@show')->name('order.show');
        Route::get('/order-edit/{id}','OrderController@edit')->name('order.edit');
        Route::post('/order-update','OrderController@update')->name('order.update');

//        Slider route
        Route::get('/slider', 'SliderController@index')->name('slider.list');
        Route::get('/slider-add', 'SliderController@create')->name('slider.add');
        Route::post('/slider-create', 'SliderController@store')->name('slider.create');
        Route::get('/slider-edit/{id}', 'SliderController@edit')->name('slider.edit');
        Route::post('/slider-update', 'SliderController@update')->name('slider.update');
        Route::post('/slider-destroy', 'SliderController@destroy')->name('slider.destroy');

//        coupon route
        Route::get('coupon','CouponController@index')->name('coupon.list');
        Route::get('coupon/new','CouponController@new')->name('coupon.add');
        Route::post('coupon/create','CouponController@create')->name('coupon.create');
        Route::get('coupon/edit/{id}','CouponController@edit')->name('coupon.edit');
        Route::post('coupon/update','CouponController@update')->name('coupon.update');
        Route::post('coupon/destroy','CouponController@destroy')->name('coupon.destroy');

//        reviews controller for admin
        Route::get('reviews', 'AdminReviewController@index')->name('reviews.list');
        Route::get('reviews/show/{id}', 'AdminReviewController@show')->name('reviews.show');
        Route::post('/review-destroy', 'AdminReviewController@destroy')->name('reviews.destroy');


        //        Fetured Categories route
        Route::get('/featuredcategories', 'FeaturedCategoryController@index')->name('featuredcategories.list');
        Route::get('/featuredcategories-add', 'FeaturedCategoryController@create')->name('featuredcategories.add');
        Route::post('/featuredcategories-create', 'FeaturedCategoryController@store')->name('featuredcategories.create');
        Route::get('/featuredcategories-edit/{id}', 'FeaturedCategoryController@edit')->name('featuredcategories.edit');
        Route::post('/featuredcategories-update', 'FeaturedCategoryController@update')->name('featuredcategories.update');
        Route::post('/featuredcategories-destroy', 'FeaturedCategoryController@destroy')->name('featuredcategories.destroy');

//        sales report
        Route::get('/sales-report', 'ReportController@index')->name('report.index');

        Route::get('/feedback', 'FeedbackController@index')->name('feedback.list');
        Route::get('/feedback/{id}', 'FeedbackController@show')->name('feedback.show');
        Route::get('/newsletter', 'NewsletterController@index')->name('newsletter.index');
    });


Route::name('frontend.')
    ->namespace('Frontend')
    ->group(function (){

        //write your routes for frontend
       Route::get('/','IndexController@index' )->name('index');

      // shop route
        Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
        Route::get('/shop', 'ShopController@index')->name('shop.index');

        // cart route

        Route::get('/cart', 'CartController@index')->name('cart.index');
        Route::post('/cart', 'CartController@store')->name('cart.store');
        Route::get('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
        Route::post('/cart/{product}', 'CartController@update')->name('cart.update');


        ///wish list

        Route::post('/wishlist', 'WishlistController@store')->name('wishlist.store');
        Route::get('/wishlist', 'WishlistController@index')->name('wishlist.index');
        Route::get('/wishlist/{product}', 'WishlistController@destroy')->name('wishlist.destroy');

        //checkout
        Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
        Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

        // coupon route
        Route::post('/coupon', 'CartController@storeCoupon')->name('coupon.store');
        Route::delete('/coupon', 'CartController@destroyCoupon')->name('coupon.destroy');

        //        review
        Route::post('/review-add','ReviewController@store')->name('review.store');
//        newsletter
        Route::get('/newsletter-add', 'IndexController@newsletter')->name('newsletter.add');
        Route::post('/feedback-add', 'IndexController@feedback')->name('feedback.add');

        Route::get('/contact', function () {
            return view('frontend.pages.contact');
        });
   /*     Route::get('/about', function () {
            return view('frontend.pages.about');
        });

        Route::get('/checkout', function () {
            return view('frontend.pages.checkout');
        });
        Route::get('/compare', function () {
            return view('frontend.pages.compare');
        });
        Route::get('/blog', function () {
            return view('frontend.pages.blog');
        });
        Route::get('/post', function () {
            return view('frontend.pages.post');
        });

        Route::get('/faq', function () {
            return view('frontend.pages.faq');
        });
        Route::get('/myaccount', function () {
            return view('frontend.pages.myaccount');
        });
        Route::get('/wishlist', function () {
            return view('frontend.pages.wishlist')->name('wishlist');
        });
        Route::get('/product', function () {
            return view('frontend.pages.product');
        });*/
    });

