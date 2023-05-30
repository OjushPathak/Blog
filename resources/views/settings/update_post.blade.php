@include('settings.css')

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      @include('settings.sidebar')

      <!-- Layout container -->
      <div class="layout-page">


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Post Settings /</span> Add Post</h4>
            <!-- Form controls -->
            <form action="{{url('/update_post_confirm',$post->id)}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="col-sm-9">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="mb-3">
                    <label for="" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="" name="title" placeholder="Title" value="{{$post->title}}" />
                  </div>

                  <div>
                    <label for="" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="" rows="7">{{$post->content}}</textarea>
                  </div>

                  <div class="mb-3 mt-2">
                    <label for="" class="form-label">Your Thumbnail</label><br />
                    <img src="thumbnail/{{$post->thumbnail}}">
                  </div>
                  
                  <div class="mb-3">
                    <label for="" class="form-label">Change Thumbnail</label>
                    <input name="thumbnail" class="form-control" type="file" id="" accept="image/*"/>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Choose Category</label>
                    <select class="form-select" id="" aria-label="" name="category">
                      <option selected>{{$post->category}}</option>
                      @foreach ($category as $category )
                      <option value="{{$category->category}}">{{$category->category}}</option>

                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Choose Tags</label>
                    <select class="form-control" name="tags"  multiple>
                      <option selected>Select Tags</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </div>
            </form>

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
    @include ('settings.footer')