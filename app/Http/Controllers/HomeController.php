<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\tags;
use App\Models\post;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $post = post::orderBy('id','desc')->get();
        $category = category::all();
        $user = User::all();
        return view('blog.show_blog',compact('post','category','user'));
    }
    
    public function redirect(){
        
        $post = post::orderBy('id','desc')->get();
        $category = category::all();
        $user = User::all();
        return view('blog.show_blog',compact('post','category','user'));
    }

}