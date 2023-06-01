<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\Tag;
use App\Models\post;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function add_category(Request $request){

            $new_category = new category();
            $new_category->category = $request->new_category;
            $new_category->save();
            Alert::success('Category Added','Category has been Added Successfully.');
            return redirect()->back();
    }

    public function view_categories(){

        $category = category::all();
        return view('settings.catagories',compact('category'));
    }
    
    public function update_category(Request $request,$id){
        
        $category = category::find($id);
        $category->category = $request->category;
        $category->save();
        Alert::success('Category Updated','Category has been Updated Successfully.');
        return redirect()->back();
    }

    public function delete_category($id){
        $delete_category = category::find($id);
        $delete_category->delete();
        Alert::success('Category Deleted','Category has been Deleted Successfully.');
        return redirect()->back();
    }
}
