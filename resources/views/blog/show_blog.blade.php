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
              <select name="order" class="form-control" id="cars">
                <option value="">Category</option>


                <option value=""></option>
                
              </select>

            </div>
          </div>
          <div class="col-md-2">
            <div class="product-price-range">
              <select name="range" class="form-control" id="cars">
                <option value="">Author</option>

                <option value=""></option>


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
      <a href="{{url('/add_posts')}}" class="mt-2 btn btn-warning bg-warning"> Add Posts </a>
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
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Post title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Read</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Post title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Read</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Post title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Read</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Post title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Read</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/022.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Post title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Read</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/035.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Post title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Read</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->

</html>