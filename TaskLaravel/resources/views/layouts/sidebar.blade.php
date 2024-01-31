<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center"  >
    <div class="sidebar-brand-text mx-3 " >Buku Tamu </div>
  </a>

<a class="sidebar-brand d-flex align-items-center justify-content-center">
  <div class="sidebar-brand-text mx-3">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." aria-label="Cari" aria-describedby="basic-addon2"  > 
    <div class="input-group-append">
    </div>
</div>
</a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw "></i>
      <span>Dashboard</span>
    </a>
  </li> 
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('tamus') }}">
      <i class="fas fa-fw "></i>
      <span>Tamu</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link">
      <i class="fas fa-fw "></i>
      <span>Setting</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}">
      <i class="fas fa-fw "></i>
      <span>Log out</span>
    </a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
