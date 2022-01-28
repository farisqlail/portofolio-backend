<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/faris') }}">
      <div class="sidebar-brand-icon">
      <img src="{{ asset('assets/img/logo.png') }}" width="35px" alt="">
      </div>
      <div class="sidebar-brand-text mx-3">Halo Faris</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/faris') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('blog.admin') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>Blog</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('portfolio.admin') }}">
          <i class="fas fa-fw fa-brain"></i>
          <span>Portfolio</span></a>
      </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

@stack('sidebar-scripts')