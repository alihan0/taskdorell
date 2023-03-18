@extends('auth-master')
@section('title', 'Confirm Code')
@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase text-center">Confirm Code</h2>
                <p class="text-white-50 mb-5 text-center">Devam edebilmek için e-posta adresine gönderilen 6 haneli kodu gir.</p>
  
            
                <div class="form-outline form-white mb-4">
                    <div class="row">
                        <label class="form-label" for="typeEmailX">6 Haneli Güvenlik Kodu</label>
                        <div class="col">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg"/>
                        </div>
                        <div class="col">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg"/>
                        </div>
                        <div class="col">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg"/>
                        </div>
                        <div class="col">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg"/>
                        </div>
                        <div class="col">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg"/>
                        </div>
                        <div class="col">
                            <input type="text" id="typeEmailX" class="form-control form-control-lg"/>
                        </div>
                    </div>
                    
                </div>
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <button class="btn btn-outline-light btn-lg px-5 text-center " type="submit">Onayla</button>
                </div>
  
              </div>
  
              <div class="text-center">
                <p class="mb-0 text-muted fs-6">Doğrulama işlemini tamamlamak için e-posta adresine gönderdiğimiz 6 haneli güvenlik kodunu girmelisin.</p>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection