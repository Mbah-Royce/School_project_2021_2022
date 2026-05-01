<?php

namespace App\Http\Controllers;

use App\Models\gaurdian;
use App\Models\Student;
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
        $gaurdians = gaurdian::paginate(10);
        return view('admin.gaurdian.index',compact('gaurdians'));
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
        $request->validate([
            'student_id' => 'required|exists:students,id'
        ]);
        
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
        $user->giveRoleto('guardian');
        $gaurdian = $user->gaurdian()->create([
            'id_number' => $request->id_number,
            'address' => $request->address,
            'profession' => $request->profession,
        ]);
        $student = Student::find($request->student_id);
        $student->update(['gaurdian_id' => $gaurdian->id]);
        return redirect()->back()->with('message','Guardian successfully created');

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

    public function displayDashboard()
    {
        $gaurdian = gaurdian::where('user_id',auth()->user()->id)->first();
        $students = $gaurdian->student()->get()->map(function($student){
            $data = [
                'student_id' => $student->id,
                'student_name' => $student->user->first_name." ".$student->user->last_name,
                'student_class' => $student->classRoom->name,
                'student_class_id' => $student->classRoom->id
            ];
            return $data;
        });
        return view('gaurdian.dashboard',compact('students'));
    }
}
