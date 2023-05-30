<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\Tag;
use App\Models\post;
use App\Models\User;

use Livewire\Component;

class Filters extends Component
{
    public $searchTerm='';
    
    public function render()
    {
        
        $post = post::orderBy('id','desc')->get();
        $category = category::all();
        $user = User::all();
        $tag = Tag::all();

        return view('livewire.filters',compact('post','category','user','tag'));


    }
}
