<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\Tag;
use App\Models\post;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $post = post::orderBy('id','desc')->get();
        $category = category::all();
        $user = User::all();
        $tag = Tag::all();
        return view('blog.show_blog',compact('post','category','user','tag'));
    }
    
    public function redirect(){
        
       
        return view('blog.show_blog');
    }

    public function blog_details($id){
        

        $post = post::where('id',$id)->first();

        return view('blog.blog_details',compact('post'));
    }

}