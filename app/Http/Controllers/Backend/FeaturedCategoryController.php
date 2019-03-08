<?php

namespace App\Http\Controllers\Backend;

use App\FeaturedCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use MercurySeries\Flashy\Flashy;

class FeaturedCategoryController extends Controller
{

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

        return redirect()->route('backend.featuredcategories.list');
    }


    public function show($id) {
        //
    }


    public function edit($id)
    {

        $fcat = FeaturedCategory::find($id);
        return view('backend.pages.featuredcategory.edit')->with(['feature' => $fcat]);
    }

    public function update(Request $request)
    {
        $fcat = FeaturedCategory::find($request->id);

        $fcat->name = $request->productName;
        $fcat->slug = $request->productSlug;

        if($request->img){
            $photo_productThumbImg = $request->file('img');
            $file_name =
                uniqid('featuredcategory_',true).str_random(5).'.'.$photo_productThumbImg->getClientOriginalExtension();

            if ($photo_productThumbImg->isValid()){
                $productThumbImg =$photo_productThumbImg->storeAs('featuredcategory',$file_name);
            }
            Storage::delete( $fcat->image);
            $fcat->image= $productThumbImg;
        }

        $fcat->save();

        Flashy::success('Featured Category updated', '');
        return redirect()->route('backend.featuredcategories.list');
    }


    public function destroy(Request $request)
    {
        //
        FeaturedCategory::find($request->id)->delete();

        Flashy::danger(' Category id#'. $request->id.' Deleted.');
        return redirect()->route('backend.featuredcategories.list');
    }
}
