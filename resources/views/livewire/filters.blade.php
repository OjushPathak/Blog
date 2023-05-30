<div class="container mt-5">

      <form method="get" action="">

        <div class="row">

          <div class="col-md-4">
            <div class="product-search">
              <input type="text" class="form-control" value="" wire:model="searchTerm" placeholder="Search" name="search">
            </div>
          </div>
          <div class="col-md-2">
            <div class="product-short">
              <select wire:model="byCategory" name="category" class="form-control" id="cars">
                <option value="">Category</option>

                @foreach ($category as $category)
                <option value="{{$category->category}}">{{$category->category}}</option>
                @endforeach
              </select>

            </div>
          </div>
          <div class="col-md-2">
            <div class="product-price-range">
              <select wire:model="byAuthor" name="author" class="form-control" id="">
                <option value="">Author</option>
                @foreach ($user as $user)
                <option value="{{$user->name}}">{{$user->name}}</option>
                @endforeach

              </select>
            </div>
          </div>



         

          <div class="col-md-2">
            <div class="product-short">


              <select wire:model="byTags" name="tags" class="form-control" id="">
                <option value="">Tags</option>
                @foreach ($tag as $tag)
                <option>{{$tag->tag}}</option>
                @endforeach
                </option>


              </select>

            </div>
          </div>
          <div class="col-md-2">
            <a href="" class="btn btn-info"> Clear All </a>
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
 

    

    <main class="my-5">
      <div class="container">
        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Latest posts</strong></h4>

          <div class="row">

            @foreach ($post as $post)
            @php
            $excerpt = mb_strimwidth($post->content, 0, 80, "[..]");
            $date = date('F j, Y', strtotime($post->created_at));
            @endphp
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <a href="{{url('blog_details',$post->id)}}"><img src="thumbnail/{{$post->thumbnail}}" class="img-fluid"
                    style="float: left; width:100%; height: 200px; object-fit:cover;" /></a>
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title mt-1"> <a href="{{url('blog_details',$post->id)}}" class="text-dark">{{$post->title}}</a></h5>
                  <p class="card-text mt-4">{{$post->Author}} <span>- {{$date}}</span></p>
                  <p class="card-text mt-4">
                    {{$excerpt}}
                  </p>
                  <a href="{{url('blog_details',$post->id)}}" class="btn btn-primary mt-2">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>
        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->
  </div>

