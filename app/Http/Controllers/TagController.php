<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\Tag;
use App\Models\post;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    public function add_tags(Request $request){

        $new_tag = new Tag();
        $new_tag->tag = $request->new_tag;
        $new_tag->save();
        Alert::success('Tag Added','Tag has been Added Successfully.');
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
        Alert::success('Tag Updated','Tag has been Updated Successfully.');
        return redirect()->back();
    }

    public function delete_tag($id){
        $delete_tag = Tag::find($id);
        $delete_tag->delete();
        Alert::success('Tag Deleted','Tag has been Deleted Successfully.');
        return redirect()->back();
    }
}
