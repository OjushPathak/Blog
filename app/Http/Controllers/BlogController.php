<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\tags;
use App\Models\post;

class BlogController extends Controller
{
    public function redirect(){
        return view('blog.show_blog');
    }

    public function add_posts(){
        $category = Category::all();
        $tag = tags::all();
        return view('blog.add_posts',compact('category','tag'));
    }

    public function post_blog(Request $request){

        $blog = new post();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $image = $request -> thumbnail;
        $imagename = time().'.'.$image -> getClientOriginalExtension();
        $request -> thumbnail->move('thumbnail',$imagename);
        $blog -> thumbnail = $imagename;
        $blog->category = $request->category;
        $blog->tags = $request->tags;
        $blog->save();
        return redirect()->back();

    }
}