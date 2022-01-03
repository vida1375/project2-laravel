<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function homepage(){
        $azad_posts = \App\Post::where('grouping', 1)->get();
        $edarat_posts = \App\Post::where('grouping', 2)->get();
        $rooz_posts = \App\Post::where('grouping', 3)->get();
        $posts = \App\Post::all();
        return view('pages.homepage', [
            'azad_posts' => $azad_posts,
            'edarat_posts' => $edarat_posts,
            'rooz_posts' => $rooz_posts,
            'posts' => $posts
            ]);
    }
    public function archive(Request $request){
        
        $search =  '%'.str_replace(' ', '%', $request->search).'%';
        $grouping = $request->section;
        $posts = \App\Post::when($grouping, function ($query, $grouping) {
            return $query->where('grouping', '=', $grouping);
        })->when($search, function ($query, $search) {
            return $query->where('title', 'like', $search)->orWhere('text_1', 'like', $search);
        })->get();
        return view('archives.create', ['posts' => $posts]);
    }
    public function userlist(){
        
        $posts = \App\Post::all();
        return view('userlists.create', ['posts' => $posts]);
    }
}
