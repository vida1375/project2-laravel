<?php

namespace App\Http\Controllers;

use App\Post;
use Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'image|max:1000',
           'text_1' => 'required',
        ],[
            'title.required' => 'عنوان مطلب خالی است',
            'image.mimes' => '    فرمت تصویر بایدjpg باشد.',
            'image.max' => '    حجم تصویر باید کمتر ازامگابایت باشد.',
            'text_1.required' => 'توضیح مطلب خالی است',
            ]);

        if ($validator->fails()) {
            return redirect('/posts/create')
                        ->withErrors($validator)
                        ->withInput();
        }
       $post = new \App\Post;
       $post->title= $request->title;
       $post->text_1= $request->text_1;
       $post->release_status= $request->release_status;
       $post->grouping= $request->grouping;
       $post->subject= $request->subject;
       $post->name= $request->name;
       $post->email= $request->email;
       $post->save();
       if ($request->has('image')) $post->storeImage($request->file('image'));
       return redirect('/posts/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',[
            'post' => $post,
            'posts' => Post::all(),
            'rooz_posts' => Post::where('grouping', 3)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
