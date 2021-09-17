<?php

namespace App\Http\Controllers;

use App\Models\gaurdian;
use App\Models\User;
use Illuminate\Http\Request;

class GaurdianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gaurdian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'password' => 'password',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'profile_picture' => $request->profile_picture
        ]);
        $user->giveRoleto('gaurdian');
        $user->student()->create([
            'field_id' => $request->field_id,
            'gaurdian_id' => $request->gaurdian_id,
            'class_room_id' => $request->class_room_id,
            'academic_session_id' => $request->academic_session_id,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'profile' =>$request->profile,
            'permanent_address' => $request->perm_add,
            'current_address' => $request->cur_add
        ]);
        return redirect()->back()->with('message','Student successfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function block($id)
    {
        $gaurdian = gaurdian::findorfail($id);
        if($gaurdian->user->status){
            $gaurdian->user->update([
                'status' => false
            ]);
            $message = "Account Blocked Succssfully";
        }else{
            $gaurdian->user->update([
                'status' => true
            ]);
            $message = "Account Unblocked Succssfully";
        }
        return redirect()->back()->with('message',$message);
    }
}
