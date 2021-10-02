<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRegisterRequest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::paginate(10);
        return view('admin.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRegisterRequest $request)
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
        $user->giveRoleto('teacher');
        $user->teacher()->create([
            'address' => $request->address,
            'qualification' => $request->qualification,
            'id_number' => $request->id_number
        ]);
        return redirect()->back()->with('message','Teacher successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findorfail($id);
        return view('admin.teacher.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findorfail($id);
        return view('admin.teacher.edit',compact('teacher'));
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
        $teacher = Teacher::findorfail($id);
        $user = User::findorfail($teacher->user_id);
        $user->update([
            'email' => $request->email,
            'password' => 'password',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'profile_picture' => $request->profile_picture
        ]);
        $teacher->update([
            'address' => $request->address,
            'qualification' => $request->qualification,
            'id_number' => $request->id_number
        ]);
        // if($user->isDirty() || $teacher->isDirty()){
        //     dd(true);
        //     return redirect()->back()->with('message','Teacher Updated Successfully');
        // }
        return redirect()->back()->with('message','Teacher Updated Successfully');

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
        $teacher = Teacher::findorfail($id);
        if($teacher->user->status){
            $teacher->user->update([
                'status' => false
            ]);
            $message = "Account Blocked Succssfully";
        }else{
            $teacher->user->update([
                'status' => true
            ]);
            $message = "Account Unblocked Succssfully";
        }
        return redirect()->back()->with('message',$message);
    }
}
