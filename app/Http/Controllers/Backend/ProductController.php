<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
        $productThumbImg="";
        $productG1="";
        $productG2="";
        $productG3="";
        $productG4="";

        $photo_productThumbImg = $request->file('productThumbImg');


        if ($photo_productThumbImg->isValid()){
            $file_name =
                uniqid('thumb_',true).str_random(5).'.'.$photo_productThumbImg->getClientOriginalExtension();
            $productThumbImg =$photo_productThumbImg->storeAs('products',$file_name);
        }

        $photo_productG1 = $request->file('productG1');


        if ($photo_productG1->isValid()){
            $file_name =
                uniqid('gallery_',true).str_random(5).'.'.$photo_productG1->getClientOriginalExtension();
            $productG1 =$photo_productG1->storeAs('products',$file_name);
        }
        $photo_productG2 = $request->file('productG2');


        if ($photo_productG2->isValid()){
            $file_name =
                uniqid('gallery_',true).str_random(5).'.'.$photo_productG2->getClientOriginalExtension();
            $productG2 =$photo_productG2->storeAs('products',$file_name);
        }
        $photo_productG3 = $request->file('productG3');


        if ($photo_productG3->isValid()){
            $file_name =
                uniqid('gallery_',true).str_random(5).'.'.$photo_productG3->getClientOriginalExtension();
            $productG3 =$photo_productG3->storeAs('products',$file_name);
        }
        $photo_productG4 = $request->file('productG4');
        $file_name =
            uniqid('gallery_',true).str_random(5).'.'.$photo_productG4->getClientOriginalExtension();

        if ($photo_productG4->isValid()){
            $productG4 =$photo_productG4->storeAs('products',$file_name);
        }

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
        $product->product_image= $productThumbImg;
        $product->gallery_image1= $productG1;
        $product->gallery_image2= $productG2;
        $product->gallery_image3= $productG3;
        $product->gallery_image4= $productG4;
        $product->save();


        Flashy::success(' Product '. $request->productName.' created.');
//        return view('backend.pages.product.list');
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
            $photo_productThumbImg = $request->file('productThumbImg');
            $file_name =
                uniqid('thumb_',true).str_random(5).'.'.$photo_productThumbImg->getClientOriginalExtension();

            if ($photo_productThumbImg->isValid()){
                $productThumbImg =$photo_productThumbImg->storeAs('products',$file_name);
            }
            Storage::delete( $product->product_image);
            $product->product_image= $productThumbImg;
        }
        if($request->productG1){
            $photo_productG1 = $request->file('productG1');
            $file_name =
                uniqid('gallery_',true).str_random(5).'.'.$photo_productG1->getClientOriginalExtension();

            if ($photo_productG1->isValid()){
                $productG1 =$photo_productG1->storeAs('products',$file_name);
            }
            Storage::delete( $product->gallery_image1);
            $product->gallery_image1= $productG1;
        }
        if($request->productG2){
            $photo_productG2 = $request->file('productG2');
            $file_name =
                uniqid('gallery_',true).str_random(5).'.'.$photo_productG2->getClientOriginalExtension();

            if ($photo_productG2->isValid()){
                $productG2 =$photo_productG2->storeAs('products',$file_name);
            }
            Storage::delete( $product->gallery_image2);
            $product->gallery_image2= $productG2;
        }
        if($request->productG3){
            $photo_productG3 = $request->file('productG3');
            $file_name =
                uniqid('gallery_',true).str_random(5).'.'.$photo_productG3->getClientOriginalExtension();

            if ($photo_productG3->isValid()){
                $productG3 =$photo_productG3->storeAs('products',$file_name);
            }
            Storage::delete( $product->gallery_image3);
            $product->gallery_image3= $productG3;
        }
        if($request->productG4){
            $photo_productG4 = $request->file('productG4');
            $file_name =
                uniqid('gallery_',true).str_random(5).'.'.$photo_productG4->getClientOriginalExtension();

            if ($photo_productG4->isValid()){
                $productG4 =$photo_productG4->storeAs('products',$file_name);
            }

            Storage::delete( $product->gallery_image4);
            $product->gallery_image4= $productG4;
        }
//            dd($request->productThumbImg);

        $product->save();

        Flashy::success(' Product '. $request->productName.' updated.');
         return back();

    }


    public function destroy($id) {

    }
}
