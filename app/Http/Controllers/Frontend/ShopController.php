<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use App\Category;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::inRandomOrder()->take(6)->get();
        $categorySlug=request()->category;
        if($categorySlug){
            $products =   Product::whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            })->orderBy('id','DESC')->paginate(9);
        }
        elseif(request()->sort == 'low_high'){
            $products = Product::orderBy('regular_price')->orderBy('discount_price')->paginate(9);
        }
        elseif (request()->sort == 'high_low') {
            $products = Product::orderBy('regular_price','DESC')->orderBy('discount_price', 'DESC')->paginate(9);

        }
        elseif(request()->price_min && request()->price_max){

            $products = Product::whereBetween('regular_price',
                [floatval(request()->price_min), floatval(request()->price_max)])
                ->whereBetween('discount_price',
                    [floatval(request()->price_min), floatval(request()->price_max)])
                ->paginate(9);
        }

        else{
            $products = Product::orderBy('id','DESC')->paginate(9);
        }

        return view('frontend.pages.shop')->with([
            'products'=>$products,
            'categories'=> $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();

        $review = Review::where('pid', $product->id)->get();
        $review_count = Review::where('pid', $product->id)->count();
        $review_sum = Review::where('pid', $product->id)->sum('rating');


        $mightLikeProduct = Product::where('slug','!=',$slug)->inRandomOrder()->take(8)->get();
        return view('frontend.pages.product')->with([
                'product'=> $product,
                'review_count' => $review_count,
                'review' => $review,
                'review_sum'=>$review_sum,
                'mightLikeProduct' => $mightLikeProduct
            ]

        );
    }

    public  function search(Request $request){
        $query = $request->input('query');
        $products = Product::where('name','like', "%$query%")->paginate(10);

        return view('frontend.pages.search-result')->with('products',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
