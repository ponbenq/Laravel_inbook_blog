<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class BlogController extends Controller
{

    public function getIndex(){
        $posts = posts::paginate(10);
        return view('blog.index')->with('post', $posts);
    }
    //
    public function getSingle($slug){
        // fetch from the DB based on slug
        
        $post = posts::where('slug', '=', $slug)->first();

        // return the view ands pass the post object 

        return view('blog.single')->with('post', $post);
    }
}
