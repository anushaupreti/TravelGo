<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customermodel;
use Auth;

class CustomerController extends Controller
{
    public function customerregister()
    {
        return view('customer.register');
    }
    public function customerstore(Request $request)
    {
        
        customermodel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
    }

    public function login(){
        return view('customer.login');
    }

    public function authenticate(Request $request)
    {
        $validator = $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:6'
        ]);

        if (Auth::guard('customer')->attempt($validator)) {
            return redirect()->route('home');
        }
    }
}
