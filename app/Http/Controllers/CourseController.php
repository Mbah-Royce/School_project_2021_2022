<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = ClassRoom::select('id','name')->get();
        $teachers = Teacher::get()->map(function($item){
            $data = [
                'id' => $item->id,
                'name' => $item->user->first_name ." ".$item->user->last_name
            ];return $data;
        });
        return view('admin.course.create',compact('classes','teachers'));
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
        'teacher_id' => 'required',
        'class_room_id' => 'required',
        'name' => 'required|string:max255',
        'coef' => 'required|integer',
        'duration' => 'required|integer',
        ]);

        Course::create([
            'teacher_id' => $request->teacher_id,
            'class_room_id' => $request->class_room_id,
            'semester_id' => $request->semester_id,
            'name' => $request->name,
            'coef' => $request->coef,
            'duration' => $request->duration,
        ]);
        return redirect()->back()->with('message','Course Created Successfully');
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
        $course = Course::findorfail($id);
        $teachers = Teacher::get()->map(function($item){
            $data = [
                'id' => $item->id,
                'name' => $item->user->first_name ." ".$item->user->last_name
            ];return $data;
        });
        $classes = ClassRoom::select('id','name')->get();
        return view('admin.course.edit',compact('course','classes','teachers'));
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
        $request->validate([
            'teacher_id' => 'required',
            'class_room_id' => 'required',
            'name' => 'required|string:max255',
            'coef' => 'required|integer',
            'duration' => 'required|integer',
            ]);
            $course = Course::findorfail($id);
            $course->update([
                'teacher_id' => $request->teacher_id,
                'class_room_id' => $request->class_room_id,
                'semester_id' => $request->semester_id,
                'name' => $request->name,
                'coef' => $request->coef,
                'duration' => $request->duration,
            ]);
            return redirect()->back()->with('message','Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::findorfail($id)->delete();
        return redirect()->back()->with('message','Deleted Successfuly');
    }
}
