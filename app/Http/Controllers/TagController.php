<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('tag.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            
        ));

        $request->validate([
            'name' => 'required|string'
        ], [
            'name.required' => 'The tags filed is required',
        ]);

        $tags = explode(",", $request->name);

        foreach($tags as $tag){
            $tagDatabase =  Tag::where('name', $tag)->first();
            if($tagDatabase == ''){
                $tag_table = new Tag;
                $tag_table->name = strtolower($tag);
                $tag_table->slug = Str::of($tag)->slug('-');

                $tag_table->save();
            }
          }
        return redirect()->route('tag.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $tags = Tag::all();
        return view('tag.edit', compact('tags', 'tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, array(
            'name' => 'required|unique:tags'
        ));

        $tag->name = strtolower($request->name);
        $tag->slug = Str::of($request->name)->slug('-'); 

        $tag->save();

        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
