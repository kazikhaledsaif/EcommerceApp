<?php

namespace App\Http\Controllers\Backend;

use App\FeaturedCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class FeaturedCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $featuredcategorylist = FeaturedCategory::all('id','name','slug','image');
        return view('backend.pages.featuredcategory.list')->with([
            'featuredcategories' => $featuredcategorylist
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
        return view('backend.pages.featuredcategory.add');
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
        $sliderimg="";
        $photo_productG4 = $request->file('image');
        if (isset($photo_productG4)) {
            if ($photo_productG4->isValid()){
                $file_name =
                    uniqid('featuredcategory_',true).str_random(5).'.'.$photo_productG4->getClientOriginalExtension();
                $sliderimg =$photo_productG4->storeAs('featuredcategory',$file_name);
            }
        }
        // create product with model method
        $fcatgory =  new FeaturedCategory();
        $fcatgory->name = $request->name;
        $fcatgory->slug = $request->slug;
        $fcatgory->image = $sliderimg;

        $fcatgory->save();



        Flashy::success('Featured Category created.');

//        return view('backend.pages.product.list');
        return redirect()->route('backend.featuredcategories.list');
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
    public function destroy(Request $request)
    {
        //
        FeaturedCategory::find($request->id)->delete();

        Flashy::danger(' Category id#'. $request->id.' Deleted.');
        return redirect()->route('backend.featuredcategories.list');
    }
}
