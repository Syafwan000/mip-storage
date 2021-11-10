<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-2 text-muted">
        <span>Dashboard</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/items*') ? 'active' : '' }}" aria-current="page" href="/dashboard/items">
            <span data-feather="package"></span>
            Items
          </a>
        </li>
      </ul>
      @can('owner')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-2 text-muted">
        <span>Administrator</span>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/admin') ? 'active' : '' }}" href="/dashboard/admin">
            <span data-feather="user-check"></span>
            Admin
          </a>
        </li>
      </ul>
      @endcan
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-2 text-muted">
        <span>Profile</span>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/profile') ? 'active' : '' }}" href="/dashboard/profile">
            <span data-feather="user"></span>
            Profile
          </a>
        </li>
        <li class="nav-item mt-3">
            <button class="logout" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <span data-feather="log-out"></span>
              Logout
            </button>
        </li>
      </ul>
    </div>
</nav>
    
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Peringatan</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin keluar ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Tidak</button>
        <form action="/logout" method="post">
          @csrf
          <button class="btn btn-danger shadow-none">Keluar</button>
        </form>
      </div>
    </div>
  </div>
</div>