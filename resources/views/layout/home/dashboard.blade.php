@extends('master')
@section('title', 'Anasayfa')

@section('content')

<div class="px-4 py-4 mb-4 text-center text-white ">
  <h1 class="display-5 fw-bold">Hoşgeldin {{Auth::user()->firstname}},</h1>
  <div class="col-lg-6 mx-auto">
    <p class=" mb-4 text-muted">
      Taskdo:Rell sayesinde projelerin artık hiç olmadığı kadar düzenli. Ayrıca tüm ekibinle senkronize bir şekilde çalışabilirsiniz ve birbirinize görevler atayabilirsiniz. Merak etme, Taskdo:Rell tamamen ücretsiz.
    </p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <button type="button" class="btn btn-primary px-4 gap-3"><i class="fa-solid fa-plus"></i> Yeni Proje Oluştur</button>
    </div>
  </div>
</div>

<div class="border-top-footer p-5 text-center text-white ">
  
  <div class="col-lg-12 mx-auto">

    <div class="row">


      @foreach ($projects as $item)
          
        <a href="#" class="col-lg-4 p-4 text-decoration-none text-white project-link">
          <div class="image mx-auto" style="width:140px;height:140px;background:url({{$item->logo}});background-size:cover;border-radius:50%"></div>
          <h2 class="pt-3 fw-normal">{{$item->title}}</h2>
          <p>
            {{$item->detail}}
          </p>
        </a>

        
      @endforeach
      <a href="#" class="col-lg-4 p-4 text-decoration-none text-white project-link new">
        <div class="image mx-auto" style="width:140px;height:140px;background:url('/static/img/icon/dashed-circle.png');background-size:cover;border-radius:50%"></div>
        <h2 class="pt-3 fw-normal text-muted"><i class="fa-solid fa-plus"></i> Yeni Proje</h2>
        <p class="text-muted">
          Başlamak için hemen yeni proje oluştur.
        </p>
      </a>
    </div>
    
    
  </div>
</div>





<!-- Three columns of text below the carousel -->
<!-- /.row -->
@endsection