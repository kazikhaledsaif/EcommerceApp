<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function addProduct()
    {
        Flashy::primary('Create new product','');
        return view('backend.pages.product.add');

    }

    public function check_slug(Request $request){
        $slug = SlugService::createSlug(Product::class, 'slug',$request->productName);

        return response()->json(['slug' => $slug]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create product with model method
        $product =  new Product();
        $product->name = $request->productName;
//        $product->slug = $request->productSlug;
        $product->details = $request->productDetail;
        $product->description = $request->productDescription;
        $product->present_price = $request->productPresentPrice;
        $product->discount_price = $request->productDiscountPrice;
        $product->stock = $request->productStock;
        $product->category_id = $request->productCategory;
        $product->percentage = $request->productDiscountPercentage;
        $product->badge= $request->productBadge;
        $product->feature_name= $request->productFeatureName;
        $product->feature_color= $request->productFeatureColor;
        $product->badge= $request->productBadge;
        $product->product_image= $request->productThumbImg;
        $product->gallery_image1= $request->productG1;
        $product->gallery_image2= $request->productG2;
        $product->gallery_image3= $request->productG3;
        $product->gallery_image4= $request->productG4;
        $product->save();
        dd($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
