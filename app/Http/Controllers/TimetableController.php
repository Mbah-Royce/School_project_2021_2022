<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Student;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function create()
    {
        $classes = ClassRoom::select('id','name')->get();
        return view('admin.timetable.tablecreate',compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'week_number' =>'required',
            'class_room_id'=>'required',
        ]);

        $class = ClassRoom::find($request->class_room_id);
        $timetable = $class->timeTable()->create([
            'title' => 'timetable',
            'week_number'=>$request->week_number,
        ]);
        $courses = $class->courses()->select('id','name')->get();
        $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        return view('admin.timetable.create',compact('courses','days','timetable','class'))->with('message','time table create');
    }

    public function index()
    {
        $timetables = Timetable::paginate(5);
        return view('admin.timetable.all_timetable',compact('timetables'));
    }

    public function studentTable()
    {
        if(session('role') == 'student'){

            $id = auth()->user()->id;
            $student = User::find($id)->student;
            $classId = Student::where('user_id',$id)->first();
            $tableId = Timetable::where('class_room_id',$classId->class_room_id)->first();
            $courses = Timetable::find($tableId->id)->courses()->orderBy('days')->get();
        foreach ($courses as $key => $course) {
           $days[$key] = $course->pivot->days;
        }
        foreach ($courses as $key => $course) {
            $start_time[$key] = $course->pivot->start_time;
         }
         foreach ($courses as $key => $course) {
            $end_time[$key] = $course->pivot->end_time;
         }
         foreach ($courses as $key => $course) {
            $course_name[$key] = $course->name;
         }
         foreach ($courses as $key => $course) {
            $teacher_name[$key] = $course->teacher->user->first_name." ".$course->teacher->user->last_name;
         }
         return view('student.timetable',compact('start_time','end_time','course_name','teacher_name'));
        }else{
            dd('error');
        }
    }
}
