<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
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

    public function userRole()
    {
        $users = User::paginate(10)->map(function($user){
            $data = [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'roles' => $user->userRoles(),
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at
            ];
            return $data;
        });
        return view('admin.role.user-role',compact('users'));
    }

    public function assignRole($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.role.assign-role',compact('user','roles'));
    }

    public function giveRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_id.*' => 'required' 
        ]);
        $user = User::find($request->user_id);
        $user->roles()->attach($request->role_id);
        return redirect('user.assign')->with('message',"Assigned Successfully");
    }

    public function assignPermission($id)
    {
        $user = Role::find($id);
        $permissions = Permission::all();
        return view('admin.permission.assign-permission',compact('user','permissions'));
    }

    public function givePermission(Request $request)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
            'persisions_id.*' => 'required' 
        ]);
        $role = Role::find($request->user_id);
        $role->permissions()->attach($request->role_id);
        return redirect('user.assign')->with('message',"Assigned Successfully");
    }
}
