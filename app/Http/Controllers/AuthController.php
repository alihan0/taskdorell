<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Hash;
use Session;


class AuthController extends Controller
{
    protected $response = [
            "type" => "warning",
            "message" => null,
            "redirect" => null,
            "status" => false,
            "errors" => null,
            "data" => null
        ];

  


    // FUNCTIONS FOR GET METHODS
    public function login(){          // LOGIN
        return view('layout.auth.login');
    }
    public function lock(){           // LOCK
        return view('layout.auth.lock');
    }
    public function register(){       // REGISTER
        return view('layout.auth.register');
    }
    public function reset_password(){ // RESET PASSWORD
        return view('layout.auth.reset-password');
    }
    public function confirm_code(){   // CONFIRM CODE
        return view('layout.auth.confirm-code');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    // FUNCTIONS FOR POST METHODS
    public function do_login(Request $request){     // LOGIN
        if(empty($request->email) || empty($request->password)){
            $this->response["message"] = "Lütfen boş alan bırakmayın.";
        }else{
            $credentials = $request->validate([
                'email'     => ['required', 'email'],
                'password'  => ['required']
            ]);
            if (Auth::attempt($credentials)) {
                if(Auth::user()->status == 1){
                    $request->session()->regenerate();
                    $this->response = ["type"=>"success","message"=>"Oturum açıldı.","status"=>2,"redirect"=>"/"];
                }else{
                    $this->response["type"] = "error";
                    $this->response["message"] = "Oturum açma yetkiniz bulunmuyor!";
                }
            }else{
                $this->response["message"] = "E-posta ya da şifre hatalı!";
            }
        }
        return $this->response;
    }
    public function do_register(Request $request){  // REGISTER
        if(empty($request->firstname) || empty($request->lastname) || empty($request->email) || empty($request->password)){
            $this->response["message"] = "Lütfen boş alan bırakmayın.";
        }else{
            $find = User::where('email',$request->email)->first();
            if($find){
                $this->response["message"] = "E-posta adresi zaten kayıtlı.";
            }else{
                $register = User::create([
                    'firstname' => ucfirst($request->firstname),
                    'lastname'  => ucfirst($request->lastname),
                    'email'     => $request->email,
                    'password'  => Hash::make($request->password),
                    'status'    => 1
                ]);
                if($register){
                    $credentials = $request->only('email', 'password');
                    Auth::attempt($credentials);
                    $request->session()->regenerate();
                    $this->response = ["type"=>"success","message"=>"Başarıyla hesap oluşturuldu","redirect"=>"/auth/login","status"=>2];
                }else{
                    $this->response["type"] = "error";
                    $this->response["message"] = "Sistem Hatası!";
                }
            }
        }

        return $this->response;
    }
}
