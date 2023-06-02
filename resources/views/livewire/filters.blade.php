<div class="container mt-5">

  <form method="get" action="">

    <div class="row">

      <form id="clearForm">
      <div class="col-md-4">
        <div class="product-search">
          <input type="text" class="form-control" value="" wire:model="query" wire:keyup.debounce="filter"
            placeholder="Search by title" name="search">
        </div>
      </div>
      <div class="col-md-2">
        <div class="product-short">
          <select wire:model="category" wire:change="filter" name="category" class="form-control" id="cars">
            <option value="">Category</option>

            @foreach ($categories as $category)
            <option value="{{$category->category}}">{{$category->category}}</option>
            @endforeach
          </select>

        </div>
      </div>
      <div class="col-md-2">
        <div class="product-price-range">
          <select wire:model="Author" wire:change="filter" name="author" class="form-control" id="">
            <option value="">Author</option>
            @foreach ($user as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
            @endforeach

          </select>
        </div>
      </div>





      <div class="col-md-2">
        <div class="product-short">


          <select wire:model="tags" wire:change="filter" name="tags" class="form-control" id="">
            <option value="">Tags</option>
            @foreach ($tag as $tag)
            <option>{{$tag->tag}}</option>
            @endforeach
            </option>


          </select>

        </div>
      </div>
    
      <div class="col-md-2">
        <input type="reset"  value="Clear form" class="bg-info btn btn-info"/> 
      </div>

    </div>
  </form>
  
  @if (Route::has('login'))
  @auth
  <a href="{{url('/add_posts')}}" class="mt-2 btn btn-warning bg-warning"> Post Settings </a>
  @else
  @endauth
  @endif
</div>