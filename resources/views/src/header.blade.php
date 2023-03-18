<div class="row">

  <div class="col-2 border-end">
    <a href="/" class="d-flex align-items-start mb-2 mb-lg-0 float-start justify-content-start text-white text-decoration-none">
      <span class="align-midde px-2 fw-bold fs-4 ">Taskdo:Rell</span>
    </a>
  </div>
  <div class="col-4 d-flex">
    <i class="fa-solid fa-magnifying-glass align-middle fa-lg p-2 ms-4"></i>
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 align-middle" role="search">
      <input type="search" class="flex-2 form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
    </form>
  </div>
  <div class="col-4">
    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-end  align-items-end float-end float-end mb-md-0">
      <li><a href="/" class="{{Route::currentRouteName() == "home" ? "header-active":""}} nav-link px-2 text-white"><i class="fa-solid fa-gauge"></i> Kontrol Paneli</a></li>
      <li><a href="/explore" class="{{Route::currentRouteName() == "explore" ? "header-active":""}} nav-link px-2 text-white"><i class="fa-solid fa-compass"></i> Keşfet</a></li>
      <li><a href="/inventory" class="{{Route::currentRouteName() == "inventory" ? "header-active":""}} nav-link px-2 text-white"><i class="fa-solid fa-briefcase"></i> Envanter</a></li>
    </ul>
  </div>
  <div class="col-2">
    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-end  align-items-end float-end float-end mb-md-0">
      <li><a href="/inbox" class="nav-link px-2 text-white"><i class="fa-solid fa-inbox"></i></a></li>
      <li><a href="/inbox" class="nav-link px-2 text-white"><i class="fa-solid fa-bell"></i></a></li>
      <li><a href="javascript:void(0)" id="friends" class="nav-link px-2 text-white"><i class="fa-solid fa-user-group"></i></a></li>
      <li><a href="javascript:void(0)" id="fullscreen" class="nav-link px-2 text-white"><i class="fa-solid fa-expand"></i></a></li>
    </ul>
  </div>

</div>