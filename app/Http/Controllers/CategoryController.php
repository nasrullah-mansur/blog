<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::with('childs')->where('p_id', 0)->get();
        return view('category.index', compact('cats'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories',
            'slug'=>'required|unique:categories',
        ]);

        $categories = new Category;

        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->p_id = $request->p_id;

        $categories->save();

        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $cats = Category::with('childs')->where('p_id', 0)->get();
        return view('category.edit', compact('category', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required|unique:categories',
            'slug'=>'required|unique:categories',
        ]);


        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->p_id = $request->p_id;

        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $blogCat = Category::find(intval($id));
        if($blogCat->childs->count()>0){
            foreach ($blogCat->childs as $subcat) {
                $subcat->delete();
            }
        }

        $blogCat->delete();


        return redirect()->route('category.index');

    }
}
