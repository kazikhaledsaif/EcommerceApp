<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use MercurySeries\Flashy\Flashy;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();

        return view('backend.pages.category.list')->with([
            'categories' => $categories
        ]);
    }

    public function check_slug(Request $request){
        $slug = SlugService::createSlug(Category::class, 'slug',$request->categoryName);

        return response()->json(['slug' => $slug]);
    }

    public function create() {
        return view('backend.pages.category.add');
    }

    public function store(Request $request)
    {

        $rules = [
            'categoryName' => 'required',
            'categorySlug' => 'required',
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);
        $catThumbImg="";
        $cat = new Category();

        $cat->name = $request->categoryName;
//        slug auto generate

        $photo_productThumbImg = $request->file('categoryThumbImg');

        if (isset($photo_productThumbImg)){
            if ($photo_productThumbImg->isValid()){
                $file_name =
                    uniqid('thumb_',true).str_random(5).'.'.$photo_productThumbImg->getClientOriginalExtension();
                $catThumbImg = $photo_productThumbImg->storeAs('categories',$file_name);

            }

        }
        $cat->banner = $catThumbImg;
        $cat->save();

        Flashy::success('Category '. $request->categoryName.' created.');

        return redirect()->route('backend.category.list');
    }


    public function show($id)
    {
        //
    }


    public function edit($id) {


        $category = Category::where('id', $id)->firstOrFail();

        return view('backend.pages.category.edit')->with([
            'category' => $category
        ]);
    }


    public function update(Request $request)
    {
        $rules = [
            'categoryName' => 'required',
            'categorySlug' => 'required|alpha_dash|unique:categories,slug,'.$request->id,
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);

        $category = Category::find($request->id);

        $category->name = $request->categoryName;
        $category->slug = $request->categorySlug;




        if($request->categoryThumbImg){
            $photo_productThumbImg = $request->file('categoryThumbImg');
            $file_name =
                uniqid('thumb_',true).str_random(5).'.'.$photo_productThumbImg->getClientOriginalExtension();

            if ($photo_productThumbImg->isValid()){
                $productThumbImg =$photo_productThumbImg->storeAs('categories',$file_name);
            }
            Storage::delete( $category->banner);
            $category->banner= $productThumbImg;
        }
        $category->save();

        Flashy::success('Category updated.');


        return $this->index();
    }



    public function destroy(Request $request) {
        Category::find($request->id)->delete();

        Flashy::error('Category deleted');
        return redirect()->route('backend.category.list');

    }
}
