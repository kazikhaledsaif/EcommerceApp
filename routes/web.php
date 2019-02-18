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
Auth::routes();


Route::name('backend.')
    ->namespace('Backend')
    ->prefix('admin')
    ->middleware('role:admin')
    ->group(function (){

        //write your routes for backend
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/products', 'ProductController@index')->name('product.list');
        Route::get('/product-add', 'ProductController@addProduct')->name('product.add');
        Route::get('/product-update', 'ProductController@edit')->name('product.update');

//        for slug generation
        Route::get('/check_slug', 'ProductController@check_slug')->name('product.slug');
//        product create
        Route::post('/product-create', 'ProductController@store')->name('product.create');


});


Route::name('frontend.')
    ->namespace('Frontend')
    ->group(function (){

        //write your routes for frontend
        Route::get('/','IndexController@index' )->name('index');

        Route::get('/shop', function () {
            return view('frontend.pages.shop');
        });
        Route::get('/about', function () {
            return view('frontend.pages.about');
        });
        Route::get('/cart', function () {
            return view('frontend.pages.cart');
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
        Route::get('/contact', function () {
            return view('frontend.pages.contact');
        });
        Route::get('/faq', function () {
            return view('frontend.pages.faq');
        });
        Route::get('/myaccount', function () {
            return view('frontend.pages.myaccount');
        });
        Route::get('/wishlist', function () {
            return view('frontend.pages.wishlist');
        });
        Route::get('/product', function () {
            return view('frontend.pages.product');
        });
    });

