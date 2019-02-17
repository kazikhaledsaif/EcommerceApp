<?php

namespace App\Http\Controllers\Backend;

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
        Flashy::primaryDark('Welcome to Dashbaord, Admin','');
        return view('backend.pages.dashboard');
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
