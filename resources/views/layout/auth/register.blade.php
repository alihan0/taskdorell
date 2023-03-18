@extends('auth-master')
@section('title', 'Register')
@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase text-center">REGISTER</h2>
                <p class="text-white-50 mb-5 text-center">TaskdoRell kullanmabilmek için ücretsiz hesap oluştur.</p>
                <form action="javascript:void(0)" id="registerForm">
                  {{ csrf_field() }}
                <div class="form-outline form-white mb-4">
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="firstname">Ad</label>
                            <input type="text" id="firstname" name="firstname" class="form-control form-control-lg"/>
                        </div>
                        <div class="col">
                            <label class="form-label" for="lastname">Soyad</label>
                            <input type="text" id="lastname" name="lastname" class="form-control form-control-lg"/>
                        </div>
                    </div>
                </div>
  
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="email">E-posta</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg"/>
                </div>
  
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="password">Şifre</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <button class="btn btn-outline-light btn-lg px-5 text-center" id="registerbutton" type="submit">Kayıt Ol</button>
                </div>
  
              </div>
  
              <div class="text-center">
                <p class="mb-0">Zaten bir hesabın var mı? <a href="/auth/register" class="text-white-50 fw-bold">Oturum Aç</a>
                </p>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection