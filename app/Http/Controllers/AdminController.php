<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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
}
