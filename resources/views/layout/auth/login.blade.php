@extends('auth-master')
@section('title', 'Login')
@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                <p class="text-white-50 mb-5 text-center">Devam edebilmek için oturum açmalısın.</p>
  
                <form action="javascript:void(0)" id="loginForm">
                  {{ csrf_field() }}
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="email">E-posta</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg"/>
                </div>
  
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="password">Şifre</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                </div>
  
                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="/auth/reset-password">Şifreni mi unuttun?</a></p>
  
                
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <button id="loginbutton" class="btn btn-outline-light btn-lg px-5 text-center" type="submit">Giriş</button>
                </div>
  
              </div>
  
              <div class="text-center">
                <p class="mb-0">Bir hesabın yok mu? <a href="/auth/register" class="text-white-50 fw-bold">Kayıt Ol</a>
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

@section('script')
    
@endsection