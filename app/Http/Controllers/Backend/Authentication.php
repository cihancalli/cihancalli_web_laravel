<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class Authentication extends Controller
{
    public function logout() {
        Auth::logout();
        return redirect()->route('authentication.login');
    }

    public function login() {
        return view('authentication.login');

    }
    public function loginPost(Request $request) {
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            toastr()->success('Successfully logged in','Welcome back '.Auth::user()->username);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('authentication.login')->withErrors('Mail adresi veya şifre hatalı');

    }

    public function register() {
        return view('authentication.register');
    }

    public function registerPost(Request $request) {
        $user = User::where('email',$request->email)->first();
        if ($user == null){
            dd("kayit islemi basarili");
        }else{
            dd("girilen mail adresi kayıtlı lutfen farkli bir mail adresi giriniz");
        }
    }

    public function forgotpassword() {
        return view('authentication.forgotpassword');
    }

    public function forgotpasswordPost(Request $request) {
        $user = User::where('email',$request->email)->first();
        if ($user != null){
            dd("şifre sifirlama maili gönderildi");
        }else{
            dd("girilen mail adresi bulunamadı lutfen farkli bir mail adresi giriniz");
        }
    }

    function getToken(string $id, string $email, string $superUser, string $name) : string  {
        $secretKey = getenv('TOKEN_SECRET_KEY');
        $payload = array(
            "iat" => time(),
            "exp" => time()+ 60 * 60 * 3,
            "uid" => $id,
            "email" => $email,
            "isSuper" => $superUser,
            "username" => $name
        );

        return  JWT::encode($payload, $secretKey, 'HS256');
    }
}
