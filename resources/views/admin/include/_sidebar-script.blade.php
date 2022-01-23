<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
      <div class="sidebar-brand-icon">
      <img src="{{ asset('assets/img/logo.png') }}" width="35px" alt="">
      </div>
      <div class="sidebar-brand-text mx-3">Administrator</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
      <a class="nav-link" href="{{ url('/daftar-admin') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Pendaftaran</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#berita" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-poll"></i>
          <span>Berita</span>
        </a>
        <div id="berita" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('/berita-admin') }}">List Berita</a>
          <a class="collapse-item" href="{{ route('frontend.berita-admin.create') }}">Tambah Berita</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-id-badge"></i>
          <span>Profile</span>
        </a>
        <div id="profile" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('/tentang-admin') }}">Tentang</a>
            <a class="collapse-item" href="{{ url('/visi-admin') }}">Visi Misi</a>
            <a class="collapse-item" href="{{ url('/akreditasi-admin') }}">Akreditasi</a>
            <a class="collapse-item" href="{{ url('/beasiswa-admin') }}">Beasiswa</a>
            <a class="collapse-item" href="{{ url('/staff-admin') }}">Staff</a>
            <a class="collapse-item" href="{{ url('/kurikulum-admin') }}">Kurikulum & <br> Pembelajaran</a>
            <a class="collapse-item" href="{{ url('/galeri-admin') }}">Galeri</a>
            <a class="collapse-item" href="{{ url('/ppdb-admin') }}">Link PPDB</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kegiatan" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-snowboarding"></i>
          <span>Kegiatan</span>
        </a>
        <div id="kegiatan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ url('/prestasi-admin') }}">Prestasi Siswa</a>
            <a class="collapse-item" href="{{ url('/kegiatanPenunjang-admin') }}">Kegiatan Penunjang</a>
            <a class="collapse-item" href="{{ url('/ekstra-admin') }}">Ekstrakurikuler</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/alumni-admin') }}">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Alumni</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/kontak-admin') }}">
          <i class="fas fa-fw fa-phone-square-alt"></i>
          <span>Kontak</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/beranda-admin') }}">
          <i class="fas fa-fw fa-home"></i>
          <span>Setting Beranda</span></a>
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