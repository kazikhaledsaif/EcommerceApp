<?php

namespace App\Http\Controllers\Frontend;


use App\FeaturedCategory;
use App\Feedback;
use App\Http\Controllers\Controller;
use App\Newsletter;
use App\Order;
use App\OrderIndex;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
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

    public function index()
    {


        $current = date('Y-m-d');
        // $current->modify('+1 day');
        $products = Product::latest()->take(10)->get();
        $products_rand = Product::inRandomOrder()->take(8)->get();
        // $products_weekly = Product::whereDate('weekly','$current')->get();
        $products_weekly = DB::select("SELECT * FROM `products` WHERE `weekly_deal` > '$current' ");
        $featuredCategory = FeaturedCategory::take(25)->orderBy('id', 'Asc')->get();
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
            'new_products' => $products,
            'random' => $products_rand,
            'sliders' => $sliders,
            'topsell' => $top_sell,
            'weekly_product' => $products_weekly,
            'featuredCategory' => $featuredCategory
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function feedback(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);

        $feedback = new Feedback();
        $feedback->name = $request->customerName;
        $feedback->email = $request->customerEmail;
        $feedback->subject = $request->contactSubject;
        $feedback->message = $request->contactMessage;

        $feedback->save();
        Flashy::success('Feedback Sent.');
        return redirect()->back();
    }

    public function newsletter(Request $request)
    {
        $rules = [
            'mail' => 'required',
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);


        $newsletter = new Newsletter();
        $newsletter->mail = $request->email;
        $newsletter->save();
        Flashy::success('Newsletter Sent.');

        return redirect()->back();
    }

    public function getOrderStatus(Request $request)
    {

        $rules = [
            'tracking_id' => 'required',
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);

        $order_indices = OrderIndex::where("tracker", $request->tracking_id)->latest('created_at')->first();

        if ($order_indices) {
            $order = Order::where("id", $order_indices->order_no)->latest('created_at')->first();

            return view('frontend.pages.order-status')->with([
                'order' => $order,
                'tracker' => $request->tracking_id]);

        }

        return redirect()->back()->with('message', 'Not Found');
    }

    public function orderCheck()
    {

        return view('frontend.pages.order-status');
    }

    public function destroy($id)
    {
        //
    }

    public function contact()
    {

        return view('frontend.pages.contact');
    }

    public function about()
    {

        return view('frontend.pages.about');
    }
}
