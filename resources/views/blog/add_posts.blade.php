@include('blog.css')

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      @include('blog.sidebar')

      <!-- Layout container -->
      <div class="layout-page">


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User /</span> Add Post</h4>
            <!-- Form controls -->
            <form action="{{url('/post_blog')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="col-sm-9">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="mb-3">
                    <label for="" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="" name="title" placeholder="Title" />
                  </div>

                  <div>
                    <label for="" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="" rows="7"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Choose Thumbnail</label>
                    <input name="thumbnail" class="form-control" type="file" id="" accept="image/*"/>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Choose Category</label>
                    <select class="form-select" id="" aria-label="" name="category">
                      <option selected>Select Category</option>
                      @foreach ($category as $category )
                      <option value="1">{{$category->category}}</option>

                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Choose Tags</label>
                    <select class="form-select" name="tags"  multiple>
                      <option selected>Select Tags</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Post</button>
                </div>
              </div>
            </div>
            </form>




            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="template/assets/vendor/libs/popper/popper.js"></script>
    <script src="template/assets/vendor/js/bootstrap.js"></script>
    <script src="template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="template/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="template/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="template/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>