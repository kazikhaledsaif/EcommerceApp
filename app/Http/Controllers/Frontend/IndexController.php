<?php

namespace App\Http\Controllers\Frontend;



use App\FeaturedCategory;
use App\Feedback;
use App\newsletter;
use App\Product;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current = date('Y-m-d');
        // $current->modify('+1 day');
        $products = Product::latest()->take(10)->get();
        $products_rand = Product::inRandomOrder()->take(8)->get();
        // $products_weekly = Product::whereDate('weekly','$current')->get();
        $products_weekly = DB::select("SELECT * FROM `products` WHERE `weekly_deal` > '$current' ");
        $featuredCategory = FeaturedCategory::take(4)->get();
     $top_sell = DB::select("SELECT  `product_id`,`name`,`slug`,`details`,`regular_price`,`discount_price`,`product_image`,
                                    `badge`,`percentage`,
                                 COUNT(`product_id`) AS `value_occurrence` 
                        FROM     `order_products` JOIN `products` 
                        ON order_products.product_id = products.id
                        GROUP BY `product_id`
                        ORDER BY `value_occurrence` DESC
                        LIMIT    5;");


        $sliders = Slider::take(5)->get();

        return view('frontend.pages.index')->with([
            'new_products'=>$products,
            'random' =>$products_rand,
            'sliders' =>$sliders,
            'topsell' =>$top_sell,
            'weekly_product'=>$products_weekly,
            'featuredCategory'=>$featuredCategory
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
    public function show($id)
    {
        //
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

    public  function feedback(Request $request){

        $feedback = new Feedback();
        $feedback->name= $request->customerName;
        $feedback->email= $request->customerEmail;
        $feedback->subject= $request->contactSubject;
        $feedback->message= $request->contactMessage;

        $feedback->save();

        return redirect()->back();
    }
    public function newsletter(Request $request){

        echo $request->email;
        $newsletter = new newsletter();
        $newsletter->mail = $request->email;
        $newsletter->save();

        return redirect()->back();
    }


    public function destroy($id)
    {
        //
    }
}
