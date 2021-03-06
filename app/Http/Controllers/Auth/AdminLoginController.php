<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    protected $redirectTo = "{{  route('admin.dashboard')}}";

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
   
    public function showLoginForm()
    {
       return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], 'remember')) {
         // if succesfull, then redirect to their intended location
          return redirect()->intended(route('admin.dashboard'));
        }
        
        //if unsuccesfull, redirect back to form.  
        return redirect()->back()->withInput($request->only('email', 'remember')); 

    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}

