<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;

class LoginController extends Controller
{
    public function index(){
        return view("register/login");
    }

    public function forgotPassword(){
        return view("register/password");
    }

    public function register(){
        return view("register/register");
    }
    public function adminRegister(Request $request){


        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $admin = new admin;

        $admin->aid = rand(100000, 999999);
        $admin->fname = $request['fname'];
        $admin->lname = $request['lname'];
        $admin->email = $request['email'];
        $admin->password = md5($request['password']);
     
        
        $admin->save();


    }

    public function login(Request $request){

        $s_email = "soumyadeepganguly1922@gmail.com";
        $s_password = "123";
        $s_id = "123456";

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($request->email == $s_email && $request->password == $s_password) {
            $request->session()->put('admin_id', $s_id);
            $request->session()->put('admin_email', $s_email);
            return redirect('/');
        }
        else {
            return redirect('login');
        }

    }

    public function logout(){
        session()->forget('admin_id', 'admin_email');
        return redirect('login');
    }
}
