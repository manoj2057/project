<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\category;
use App\Models\user;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::latest()->get();
        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $posts = Post::latest()->get();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new post;
        $posts->title = $request->input('title');
        $posts->desc = $request->input('desc');
        $posts->author = $request->input('author');
        $posts->place = $request->input('place');
        $posts->category_id = $request->input('category_id');


        if ($request->hasFile('img')) {
            // uploading img to imgs folder
            $name = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/images', $name);
            $posts->img = $name;
        }
        if ($posts->save()) {
            return redirect()->route('post_list');
        } else {
            return redirect()->back();
        }
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
    public function edit(Post $post)
    {
        $categories = category::all();
        return view('blog.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, POst $posts)
    {
        $posts->title = $request->get('title');
        $posts->desc = $request->get('desc');
        $posts->author = $request->get('author');
        $posts->place = $request->get('place');
        $posts->category_id = $request->get('category_id');


        if ($request->hasFile('img')) {
            // uploading img to imgs folder
            $name = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/images', $name);
            $posts->img = $name;
        }
        if ($posts->save()) {
            return redirect()->route('post_list');
        } else {
            return redirect()->back();
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(POst $post)
    {
        $post->delete();

        if ($post->delete()) {
            return redirect()->route('product_list');
        } else {
            return redirect()->back();
        }
    }
}
