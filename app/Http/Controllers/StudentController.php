<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Http\Requests\StudentRegisterRequest;
use App\Models\AcademicSession;
use App\Models\ClassRoom;
use App\Models\Field;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::get()->map(function($item){
            $data = [
                'user' => $item->user,
                'class' => $item->classRoom->name,
                'field' => $item->field->name
            ];
            return $data;
        });
        // dd($students);
            return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::select('id','name')->get();
        $sessions = AcademicSession::select('id','year')->get();//get the latest data
        $classes = ClassRoom::select('id','name')->get();
        return view('admin.student.create',compact('fields','sessions','classes',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRegisterRequest $request)
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
        $user->giveRoleto('student');
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
}
