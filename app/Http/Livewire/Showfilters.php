<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
class Showfilters extends Component
{
    use WithPagination;

    public $posts;

    protected $listeners = ['reloadPosts'];
    
    public function mount()
    {
        $this->posts = Post::orderBy('id', 'desc')->get();
        $this->reloadPosts(null, null, [], null);
    }

    public function render()
    {
     
        return view('livewire.showfilters');
    }
    

    public function reloadPosts($category,$Author,$tags,$query){

        $this->posts = Post::query();

        if ($category){
            $this->posts = $this->posts->where('Category',$category);
        }

        if ($Author){
            $this->posts = $this->posts->where('Author',$Author);
        }

        
        if (!empty($tags)) {
            if (!is_array($tags)) {
                $tags = [$tags];
            }
            $this->posts = $this->posts->where(function ($query) use ($tags) {
                foreach ($tags as $tag) {
                    $query->orWhereJsonContains('Tags', $tag);
                }
            });
        }
        
        if ($query){
            $this->posts = $this->posts->where('title','like','%'.$query.'%');
        }

        $this->posts = $this->posts->orderBy('id', 'desc')->get();
    }



}

