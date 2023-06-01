
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Post Settings /</span> View Posts</h4>

            <div class="card">
              
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th>Post Title</th>
                      <th>Catagories</th>
                      <th>Tags</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  @foreach ($post as $post)
                  @php
                    $date = date('F j, Y', strtotime($post->created_at));
                  @endphp
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong></strong>{{$post->title}}</strong></td>
                      <td><a href="{{url('/view_categories')}}">{{$post->category}}</a></td>
                      <td>

                      @if(($post->tags=="Select Tags"))
                      No Tag
                       
                      @else

                      @php
                        $decoded_tag = json_decode($post->tags)
                        @endphp

                        @foreach ($decoded_tag as $tagg)
                        {{$tagg}}
                        @endforeach
                       
                       @endif
                        
                      </td>
                      <td>{{$date}}</td>
                      
                      <td>
                      <a href="{{url('update_post',$post->id)}}"><span class="btn bg-label-primary me-1">Edit</span></a>
                      <a href="{{url('delete_post',$post->id)}}" onclick="return confirm('Are You Sure to Delete this post?')"><span class="btn bg-label-danger me-1">Delete</span></a>
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



    <!-- Core JS -->
@include ('settings.footer')