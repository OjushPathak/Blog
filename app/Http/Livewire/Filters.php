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

    public $category;  
    public $Author; 
    public $tags; 
    public $query;

    
    
    public function render()
    {
        
        $post = post::orderBy('id','desc')->get();
        $categories= category::get();
        $user = User::all();
        $tag = Tag::all();

        return view('livewire.filters',['categories'=>$categories,'post'=>$post,'user'=>$user,'tag'=>$tag]);
    }

    public function filter(){
        $this->emitTo('showfilters','reloadPosts',$this->category,$this->Author,$this->tags,$this->query);
    }
     
}
