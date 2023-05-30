@include('blog.css')

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


    <main class="my-5">

      <div class="container">
          <a href="{{url('/')}}" class="btn btn-danger">Go Back</a>
        <section id="blog-details" class="blog-details">



          <div class="row g-5">



            <article class="article">

              <div class="post-img">
                <img src="thumbnail/{{$post->thumbnail}}" alt="" class="img-fluid" style="width:100%; height: 500px; object-fit:cover;">
              </div>

              <h class="title">{{$post->title}}</h>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{$post->Author}}</li>
                  @php
                    $date = date('F j, Y', strtotime($post->created_at));
                  @endphp
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{$date}}</li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                
              <p class="mb-4"> {{$post->content}}</p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li>{{$post->category}}</li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                @php
                $decoded_tag = json_decode($post->tags)
                @endphp

                @foreach ($decoded_tag as $tagg)
                <li>{{$tagg}}</li>
                @endforeach

                  
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End post article -->

           



          </div>


      </div>

  </div>

  </div>

  </section><!-- End Blog-details Section -->









  </div>
  </main>
  <!--Main layout-->
  </div>

  @include('blog.footer')