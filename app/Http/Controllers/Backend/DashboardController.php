<?php

namespace App\Http\Controllers\Backend;

use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    Flashy::info('Message', 'http://your-awesome-link.com')
    Flashy::success('Message', 'http://your-awesome-link.com')
    Flashy::error('Message', 'http://your-awesome-link.com')
    Flashy::warning('Message', 'http://your-awesome-link.com')
    Flashy::primary('Message', 'http://your-awesome-link.com')
    Flashy::primaryDark('Message', 'http://your-awesome-link.com')
    Flashy::muted('Message', 'http://your-awesome-link.com')
    Flashy::mutedDark('Message', 'http://your-awesome-link.com')

     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentYear= Date('Y');
        $currentMonth = Date('m');
        $currentDate = Date('Y-m-d');
//        dump($currentDate);
//        dump($currentMonth);
//        dump($currentYear);

        $totalsell = Order::where('status', 'Delivered')->sum('billing_subtotal');
        $totalItem = Order::join('order_products','orders.id','=','order_products.order_id')
            ->where('status', 'Delivered')->count();


        $dailySell = Order::whereDate('created_at', '=', $currentDate)
            ->where('status', 'Delivered')
            ->sum('billing_subtotal');

        $dailyItem = Order::whereDate('created_at', '=', $currentDate)
            ->where('status', 'Delivered')
            ->count();

        $monthlySell = Order::whereYear('created_at', '=', $currentYear)
            ->whereMonth('created_at', '=', $currentMonth)
            ->where('status', 'Delivered')
            ->sum('billing_subtotal');

        $monthlyItem = Order::whereYear('created_at', '=', $currentYear)
            ->whereMonth('created_at', '=', $currentMonth)
            ->where('status', 'Delivered')
            ->count();

        $lastOrder = Order::OrderBy('created_at', 'DESC')->take(20)->get();



        $pendingOrder = Order::where('status', '=', 'Pending')->count();
        $approvedOrder = Order::where('status', '=', 'Approved')->count();
        $successfulOrder = Order::where('status', '=', 'Delivered')->count();


        return view('backend.pages.dashboard')->with([
            'totalSell' =>$totalsell,
            'totalItem' =>$totalItem,
            'dailySell' => $dailySell,
            'dailyItem' => $dailyItem,
            'monthlySell' => $monthlySell,
            'monthlyItem' => $monthlyItem,
            'lastOrder' =>$lastOrder,
            'pendingOrder' =>$pendingOrder,
            'approvedOrder' =>$approvedOrder,
            'successOrder' =>$successfulOrder,
        ]);
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
