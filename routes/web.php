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

//        review
        Route::post('/review-add','ReviewController@store')->name('review.store');



    });


Route::name('frontend.')
    ->namespace('Frontend')
    ->group(function (){

        //write your routes for frontend
        Route::get('/','IndexController@index' )->name('index');

      // shop route
        Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
        Route::get('/shop', 'ShopController@index')->name('shop.index');


        Route::get('/about', function () {
            return view('frontend.pages.about');
        });
        Route::get('/cart', function () {
            return view('frontend.pages.cart')->name('cart');
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
            return view('frontend.pages.wishlist')->name('wishlist');
        });
        Route::get('/product', function () {
            return view('frontend.pages.product');
        });
    });

