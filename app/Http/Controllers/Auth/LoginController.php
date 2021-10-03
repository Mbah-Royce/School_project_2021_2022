<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $user = $request->user();
        if(!$user->is_changed){
             return redirect('setpass');
        }
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
        session(['role' => $roles['0']['name']]);
        return redirect("/".$roles['0']['name'].'/dashboard');
    }

    public function delete(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->forget('role');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function setPass(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->update(['password' => ($request->password),'is_changed' => true]);
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
        session(['role' => $roles['0']['name']]);
        return redirect("/".$roles['0']['name'].'/dashboard');
    }

}
