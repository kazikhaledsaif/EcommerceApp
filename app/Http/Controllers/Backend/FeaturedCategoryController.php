<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\FeaturedCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
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
        $categorylist = Category::all();
        return view('backend.pages.featuredcategory.add')->with([
            'category' => $categorylist
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $rules = [
            'productCategory' => 'required',
            'image' => 'required',
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);
        if (FeaturedCategory::count() >= 4){
            Flashy::success('You Can Only Create 4 Featured Category.');

            return redirect()->route('backend.featuredcategories.list');
        }

        $sliderimg="";
        $photo_productG4 = $request->file('image');
        if (isset($photo_productG4)) {
            if ($photo_productG4->isValid()){
                $file_name =
                    uniqid('featuredcategory_',true).str_random(5).'.'.$photo_productG4->getClientOriginalExtension();
                $sliderimg =$photo_productG4->storeAs('featuredcategory',$file_name);
            }
        }
        $cat = Category::find($request->productCategory);
        $fa = FeaturedCategory::where('slug', '=', $cat->slug)->first();
        if ($fa) {
            Flashy::error('Same Featured Category already added.');

            return Redirect::back();
        }
      //  dd($cat);
        // create product with model method
        $fcatgory =  new FeaturedCategory();
        $fcatgory->name = $cat->name;
        $fcatgory->slug = $cat->slug;
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


        $categorylist = Category::all();
        $fcat = FeaturedCategory::find($id);
        return view('backend.pages.featuredcategory.edit')->with(['feature' => $fcat,
            'category' => $categorylist
            ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'productCategory' => 'required'
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);


        $fcat = FeaturedCategory::find($request->id);
        $cat = Category::find($request->productCategory);
        if ($fcat->slug != $cat->slug){
            $fa = FeaturedCategory::where('slug', '=', $cat->slug)->first();
            if ($fa) {
                Flashy::error('Same Featured Category already added.');

                return Redirect::back();
            }
        }



        $fcat->name = $cat->name;
        $fcat->slug = $cat->slug;

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
 
        return redirect()->route('backend.featuredcategories.list');
    }
}
