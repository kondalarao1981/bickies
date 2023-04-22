<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }
    
    /**
     * 
     * @param Request $request
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        
        $validatedData = auth()->attempt([
            'email'    => $request->email,
            'password' => $request->password,
            'is_admin' => 1
        ]);
        
        if($validatedData) {
            return redirect()->route('dashboard')->with('success', 'Login Successfull');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
}