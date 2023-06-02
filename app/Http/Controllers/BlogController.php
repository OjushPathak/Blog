<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\Tag;
use App\Models\post;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class BlogController extends Controller
{
    public function add_posts(){

        $category = Category::all();
        $tag = tag::all();
        return view('settings.add_posts',compact('category','tag'));
    }

    public function post_blog(Request $request){

        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'thumbnail'=>'required',
            'category'=>'nullable',
            'tag'=>'required'
        ]);

        $blog = new post();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $image = $request -> thumbnail;
        $imagename = time().'.'.$image -> getClientOriginalExtension();
        $request -> thumbnail->move('thumbnail',$imagename);
        $blog -> thumbnail = $imagename;
        $blog->category = $request->category;
        $blog->tags = json_encode( $request->tag);
        $blog->author = Auth::user()->name; 
        $blog->save();
        Alert::success('Post Added','Post has been Added Successfully.');
        return redirect()->back();

    }

    public function view_posts(){
        
        $name = Auth::user() -> name;
        $post = post::where('author', $name)->orderBy('id','desc')->get();
        return view('settings.posts',compact('post'));
    }

    public function update_post($id){
        $post = post::find($id);
        $category = Category::all();
        $tag = Tag::all();
        return view('settings.update_post',compact('post','category','tag'));
    }

    public function update_post_confirm(Request $request, $id){
        
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'thumbnail'=>'required',
            'category'=>'nullable',
            'tag'=>'required'
        ]);
        
        $blog = post::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $image = $request -> thumbnail;
        if($image){
        $imagename = time().'.'.$image -> getClientOriginalExtension();
        $request -> thumbnail->move('thumbnail',$imagename);
        $blog -> thumbnail = $imagename;
        }
        $blog->category = $request->category;
        $blog->tags = json_encode( $request->tag);
        $blog->author = Auth::user()->name; 
        $blog->save();
        Alert::success('Post Updated','Post has been Updated.');
        return redirect('/view_posts');
        
    }
    public function delete_post($id){

        $delete_post = post::find($id);
        $delete_post -> delete();
        Alert::success('Post Deleted','Post has been Deleted.');
        return redirect() -> back();

    }
}
