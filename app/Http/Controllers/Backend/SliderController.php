<?php

namespace App\Http\Controllers\Backend;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider_list = Slider::all('id','title1','title2','detail','img','slug');
        return view('backend.pages.slider.list')->with([
            'sliders' => $slider_list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {


        return view('backend.pages.slider.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sliderimg="";
        $photo_productG4 = $request->file('slider');
        if (isset($photo_productG4)) {
            if ($photo_productG4->isValid()){
                $file_name =
                    uniqid('gallery_',true).str_random(5).'.'.$photo_productG4->getClientOriginalExtension();
                $sliderimg =$photo_productG4->storeAs('products',$file_name);
            }
        }
        // create product with model method
           $slider =  new Slider();
          $slider->title1 = $request->title1;
           $slider->title2 = $request->title2;
           $slider->detail = $request->detail;
           $slider->slug = $request->slug;
        $slider->img = $sliderimg;

        $slider->save();



        Flashy::success('Slider created.');

//        return view('backend.pages.product.list');
        return redirect()->route('backend.slider.list');

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

        $slider = Slider::where('id',$id)->firstOrFail();


        return view('backend.pages.slider.edit')->with([
            'slider' => $slider,
        ]);
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
    public function destroy(Request $request)
    {
        //
        Slider::find($request->id)->delete();

        Flashy::danger(' Slider id#'. $request->id.' Deleted.');
        return redirect()->route('backend.slider.list');
    }
}
