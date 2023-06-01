

<main class="my-5">
      <div class="container">
        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Latest posts</strong></h4>

          <div class="row">

            @foreach ($posts as $post)
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

