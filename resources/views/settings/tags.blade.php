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
        @include ('sweetalert::alert')

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Post Settings /</span> Tags</h4>

            <div class="col-md-12">
                  <div class="card mb-4">
                    
                    <form action="{{url('/add_tags')}}" method="post">
                      @csrf
                    <div class="card-body">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="" placeholder="Eg: Islington" name="new_tag"/>
                        <label for="">Add Tag</label>
                      </div>
                      <button type="submit" class="btn btn-primary mt-3">Add</button>
                    </div>
                    </form >
                  </div>
                </div>

            <div class="card">

              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th>Tags</th>

                      <th>Actions</th>
                    </tr>
                  </thead>
                  @foreach ($tag as $tag)
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$tag->tag}}</strong>
                      </td>


                      <td>
                        <span type="button" data-bs-toggle="modal" data-bs-target="#update_modal{{$tag->id}}"
                          class="btn bg-label-primary me-1">Edit</span>
                          <a href="{{url('delete_tag',$tag->id)}}" onclick="return confirm('Are You Sure to Delete this tag?')"><span class="btn bg-label-danger me-1">Delete</span></a>
                        
                      </td>
                    </tr>

                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>







          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Modal -->
    @php
    $loopForModel = App\Models\Tag::all();
    @endphp
    @foreach($loopForModel as $tag)
    <div class="modal fade" id="update_modal{{$tag->id}}" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Update Tag</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{url('/update_tag',$tag->id)}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <label for="" class="form-label">Tag Name</label>
                  <input type="text" id="" class="form-control" name="tag" placeholder="Update Tag" value="{{$tag->tag}}" />
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>


  <!-- Core JS -->
  @include ('settings.footer')