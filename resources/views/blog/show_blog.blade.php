<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  
  <div class="container mt-3">
    @if (Route::has('login'))
    <div class="mx-2 my-2">
      @auth
      <x-app-layout></x-app-layout>
      @else
      <a href="{{url('/login')}}" class="btn btn-primary text-decoration-none">Login</a>

      @if (Route::has('register'))
      <a href="{{url('/register')}}" class="btn btn-success text-decoration-none">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <!--Main layout-->
    <div class="container mt-5">

      <form method="get" action="">

        <div class="row">

          <div class="col-md-4">
            <div class="product-search">
              <input type="text" class="form-control" value="" placeholder="Search" name="search">
            </div>
          </div>
          <div class="col-md-2">
            <div class="product-short">
              <select name="category" class="form-control" id="cars">
                <option value="">Category</option>

                @foreach ($category as $category)
                <option value="{{$category->category}}">{{$category->category}}</option>
                @endforeach
              </select>

            </div>
          </div>
          <div class="col-md-2">
            <div class="product-price-range">
              <select name="range" class="form-control" id="cars">
                <option value="">Author</option>
                @foreach ($user as $user)
                <option value="{{$user->name}}">{{$user->name}}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="col-md-2">
            <div class="product-short">


              <select name="item" class="form-control" id="cars">
                <option value="">Tags</option>

                <option></option>
                </option>


              </select>

            </div>
          </div>
          <div class="col-md-2">
            <div class="product-short">
              <button type="submit" class="btn btn-info bg-info"> Filter Blogs</button>
              
              
            </div>
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
                $excerpt =  mb_strimwidth($post->content, 0, 80, "[..]");
                $date = date('F j, Y', strtotime($post->created_at));
              @endphp
              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="thumbnail/{{$post->thumbnail}}" class="img-fluid" style="float: left; width:100%; height: 200px; object-fit:cover;" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title mt-1"><strong>{{$post->title}}</strong></h5>
                    <p class="card-text mt-4">{{$post->Author}} <span>- {{$date}}</span></p>
                    <p class="card-text mt-4">
                      {{$excerpt}}
                    </p>
                    <a href="#!" class="btn btn-primary mt-2">Read More</a>
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

</html>