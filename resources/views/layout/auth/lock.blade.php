@extends('auth-master')
@section('title', 'Lock Screen')
@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase text-center">LOCK</h2>
                <p class="text-white-50 mb-5 text-center">Devam edebilmek için kimliğini doğrulamalısın.</p>
  
            
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Şifre</label>
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                </div>
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <button class="btn btn-outline-light btn-lg px-5 text-center " type="submit">Giriş</button>
                </div>
  
              </div>
  
              <div class="text-center">
                <p class="mb-0 text-muted fs-6">Güvenlik için bu hesap kitlendi. Devam edebilmek için kimliğini doğrulamalısın.</p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection