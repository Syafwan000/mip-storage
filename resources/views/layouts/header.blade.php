<header class="navbar sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MIP</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="bi bi-grid"></i></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
           <p class="username m-0 px-5" href="#"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Halo, {{ auth()->user()->username }}</p>
        </div>
    </div>
</header>