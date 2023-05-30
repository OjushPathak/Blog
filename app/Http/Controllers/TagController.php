<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\Tag;
use App\Models\post;
use App\Models\User;

class TagController extends Controller
{
    public function add_tags(Request $request){

        $new_tag = new Tag();
        $new_tag->tag = $request->new_tag;
        $new_tag->save();
        return redirect()->back();
    }
    public function view_tags(){

        $tag = Tag::all();
        return view('settings.tags',compact('tag'));
    }

    public function update_tag(Request $request,$id){
            
        $tag = Tag::find($id);
        $tag->tag = $request->tag;
        $tag->save();
        return redirect()->back();
    }

    public function delete_tag($id){
        $delete_tag = Tag::find($id);
        $delete_tag->delete();
        return redirect()->back();
    }
}
