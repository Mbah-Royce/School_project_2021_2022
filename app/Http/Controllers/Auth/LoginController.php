<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $roles = User::find(auth()->user()->id)->roles->map(function($role){
            $data =[
                'name' => $role->name
            ];
            return $data;
        });
        // $request->session()->regenerate();
        if(Count($roles) >=2){
            return View('auth.chooseRole',compact('roles'));
        }
        return redirect("/".$roles['0']['name'].'/dashboard');
    }

    public function delete(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
