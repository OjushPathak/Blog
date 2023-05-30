<!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          
          <h1> ING Blog</h1>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="{{url('/add_posts')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Add Post</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="{{url('/view_categories')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-layout"></i>
              <div data-i18n="Analytics">Categories</div>
            </a>
          </li>
         
          <!-- Blogs -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">My Blogs</span>
          </li>
          <li class="menu-item">
            <a href="{{url('view_posts')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Your Posts</div>
            </a>
          </li>
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text text-danger">Go Back</span>
          </li>
          <li class="menu-item">
            <a href="{{url('/redirect')}}" class="menu-link text-danger">
              
              <div data-i18n="Analytics">Return to Home</div>
            </a>
          </li>
        </ul>
      </aside>