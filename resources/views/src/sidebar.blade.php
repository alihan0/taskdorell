<div class="d-flex flex-column flex-shrink-0 rounded-end shadow" style="position:fixed;height:100%;background:#111827;width: 4.5rem;z-index:100">
  <a href="/" class="d-flex border-bottom mb-2 mb-lg-0 p-3  justify-content-center align-middle text-white text-decoration-none">
    <svg id="logo-35" width="50" height="39" viewBox="0 0 50 39" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M16.4992 2H37.5808L22.0816 24.9729H1L16.4992 2Z" class="ccompli1" fill="#007AFF"></path> <path d="M17.4224 27.102L11.4192 36H33.5008L49 13.0271H32.7024L23.2064 27.102H17.4224Z" class="ccustom" fill="#312ECB"></path> </svg>
  </a>
  <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-4">


      @foreach ($projects as $project)
      <li class="nav-item mb-3 ">
          <a href="/project/{{$project->tag}}" class="nav-link p-0 py-2" aria-current="page" title="{{$project->title}}" data-bs-toggle="tooltip" data-bs-placement="right">
              <div class="d-flex justify-content-center">
                  <div class="w-75 rounded-circle p-4 shadow-lg " style="border:0.2rem solid #334155;height:3.2rem;background:url({{$project->logo}});background-size:cover"></div>
                @if ($project->owner == Auth::user()->id)
                  <i class="fa-solid fa-crown" style="position: absolute;margin-top:2.7rem;color:#eab308;"></i>
                @else
                  <i class="fa-solid fa-users" style="position: absolute;margin-top:2.7rem;color:#4338ca;"></i>
                @endif
              </div>
          </a>
      </li>
      
      @endforeach

      <li class="nav-item mb-3 ">
          <a href="#" class="nav-link  p-0 py-1" aria-current="page" title="Yeni Proje" data-bs-toggle="tooltip" data-bs-placement="right">
              <div class="d-flex justify-content-center">
                  <div class="w-75 rounded-circle py-1 shadow-lg" style="height:3.2rem;background:url(/static/img/icon/add-circle.png);background-size:cover">
                  <img src="" alt=""></div>
                </div>
          </a>
      </li>
    
    
    
    
    
  </ul>
  <div class="dropdown border-top">
    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa-solid fa-language text-white"></i>
    </a>
    <ul class="dropdown-menu text-small shadow">
      <li><a class="dropdown-item" href="#"><img class="align-middle" src="/static/img/flag/tr.png" alt="" width="25"> <span class="align-middle">Türkçe</span></a></li>
      <li><a class="dropdown-item" href="#"><img class="align-middle" src="/static/img/flag/en.png" alt="" width="25"> <span class="align-middle">English</span></a></li>
    </ul>
    
  </div>
  <div class="dropdown border-top">
    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
    </a>
    <ul class="dropdown-menu text-small shadow">
      <li><a class="dropdown-item" href="#"><i class="fa-solid fa-folder-plus"></i> Yeni Proje</a></li>
      <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Profil</a></li>
      <li><a class="dropdown-item" href="#"><i class="fa-solid fa-cog"></i> Ayarlar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-power-off"></i> Çıkış Yap</a></li>
    </ul>
    
  </div>
  
</div>