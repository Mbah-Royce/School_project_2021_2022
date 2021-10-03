<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('password.changed');
    }
    
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.dashboard',compact('users'));
    }
    public function revokeRole(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id'
        ]);
        dd($request->user_id);
        $user =User::findorfail($request->user_id)->roles()->detach($id);
        return redirect()->back()->with('message','Role Revoked Successfully');

        // $user->roles()->detach($roleId);
    }

    public function block($id)
    {
        $user = User::findorfail($id);
        if($user->status){
            $user->update([
                'status' => false
            ]);
            $message = "Account Blocked Succssfully";
        }else{
            $user->update([
                'status' => true
            ]);
            $message = "Account Unblocked Succssfully";
        }
        return redirect()->back()->with('message',$message);
    }
}
