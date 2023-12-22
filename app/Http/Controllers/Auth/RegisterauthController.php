<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterauthController extends Controller
{
    protected $data = [];
    public function __construct(){
        $this->data['user']= User::all();
    }

    public function register(){
        return view("auth.registers.register", $this->data);
    }

    public function registerpost( Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route("home")->with("success","Successfully Registered");
    }

    public function login(Request $request){
        return view("auth.registers.register");
    }

    public function loginpost(Request $request){
        $credetials = [
            "email"=> $request->email,
            "password"=> $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('dashboard')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }


    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login.registers');
    }
}
