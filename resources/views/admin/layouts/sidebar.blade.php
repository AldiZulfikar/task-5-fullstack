  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" ">
        <img src="{{ asset('admin-assets') }}/assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Fullstack</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('/')) ? 'active bg-gradient-primary' : '' }} " href="{{route('/')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-globe-americas"></i>
            </div>
            <span class="nav-link-text ms-1">Lihat Websites</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-dashboard')) ? 'active bg-gradient-primary' : '' }} " href="{{route('admin-dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('admin-article-admin')) ? 'active bg-gradient-primary' : '' }}" href="{{route('admin-article-admin')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper"></i>
            </div>
            <span class="nav-link-text ms-1">Article</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->routeIs('category.index')) ? 'active bg-gradient-primary' : '' }}" href="{{route('category.index')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper"></i>
            </div>
            <span class="nav-link-text ms-1">Category</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>