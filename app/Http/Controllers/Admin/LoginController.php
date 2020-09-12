<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
        return view('backoffice.login');
    }
     public function authenticate(Request $request)
    {   

        $credenciales = $request->only('user', 'password');
        $credenciales['state']=1;
        $credenciales['is_admin']=1;
        if (Auth::attempt($credenciales )) {
            return redirect()->intended('admin/home');

        }else{
            $error=true;
            return view('backoffice.login',compact('error'));
        }
    }
}
