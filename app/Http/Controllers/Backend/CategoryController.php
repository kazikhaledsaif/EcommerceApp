<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $cat = new Category();

        $cat->name = $request->categoryName;
//        slug auto generate
        $cat->banner= $request->categoryThumbImg;

        $cat->save();

        Flashy::success(' Category '. $request->categoryName.' created.');

        return $this->index();
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
        $category = Category::find($request->id);

        $category->name = $request->categoryName;
        $category->slug = $request->categorySlug;


        if($request->categoryThumbImg){
            $category->banner= $request->categoryThumbImg;
        }

        $category->save();

        Flashy::success(' Category updated.');


        return $this->index();
    }



    public function destroy($id)
    {
        //
    }
}
