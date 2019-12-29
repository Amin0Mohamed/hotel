<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:client')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.client-login');
    }

    public function login(Request $request)
    {
   //  validate the form data
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ]);
     //  attempt to log the user in
        if (Auth::guard('client')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('client.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
        return redirect()->route('client.login');
    }
}
