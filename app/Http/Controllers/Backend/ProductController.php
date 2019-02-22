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
    public function index() {
        $product_list = Product::all('id','name','slug','stock','present_price','discount_price','badge');
        return view('backend.pages.product.list')->with([
            'products' => $product_list
        ]);

    }

    public function check_slug(Request $request){
        $slug = SlugService::createSlug(Product::class, 'slug',$request->productName);

        return response()->json(['slug' => $slug]);
    }


    public function create() {
        return view('backend.pages.product.add');

    }


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


        Flashy::success(' Product '. $request->productName.' created.');

        return $this->index();
    }


    public function show(Product $product) {

    }


    public function edit($id) {
        $product = Product::where('id',$id)->firstOrFail();

        return view('backend.pages.product.edit')->with([
            'product' => $product
        ]);
    }


    public function update(Request $request) {
        $product = Product::find($request->id);

        $product->name = $request->productName;
        $product->slug = $request->productSlug;
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

        if($request->productThumbImg){
            $product->product_image= $request->productThumbImg;
        }
        if($request->productG1){
            $product->gallery_image1= $request->productG1;
        }
        if($request->productG2){
            $product->gallery_image2= $request->productG2;
        }
        if($request->productG3){
            $product->gallery_image3= $request->productG3;
        }
        if($request->productG4){
            $product->gallery_image4= $request->productG4;
        }

        $product->save();

        Flashy::success(' Product updated.');
        return $this->index();

    }


    public function destroy($id) {

    }
}
