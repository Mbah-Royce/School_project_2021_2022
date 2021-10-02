<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Course;
use App\Models\Student;
use App\Models\Timetable;
use Illuminate\Http\Request;

class TimeTableManagement extends Controller
{
    public function create()
    {
        $classes = ClassRoom::select('id','name')->get();
        $courses = Course::select('id','name')->get();
        $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        return view('admin.timetable.create',compact('classes','courses','days'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_room_id' => 'required',
            'start_time.*' => 'required',
            'end_time' => 'required',
            'course_id.*' => 'required',
            'week_number' => 'required'
        ]);
        $class = ClassRoom::find($request->class_room_id);
        $timetable = $class->timeTable()->create([
            'title' => 'timetable',
            'week_number'=>$request->week_number,
        ]);
        $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];$j=0;
        for($i = 0; $i <= 17; $i++){
            $timetable->courses()->attach(
                $request->course_id[$i],
                ['start_time' => $request->start_time[$i],
                  'end_time' => $request->start_time[$i],
                  'days' => $days[$j]
            ],
        
            );
            if(fmod(($i+1),3) == 0){
                ++$j;
            }
        }
       
    }

    public function show($id)
    {
        $courses = Timetable::find($id)->courses()->orderBy('days')->get();
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
        // dd($days,$start_time,$end_time,$course_name,$teacher_name);
        return view('admin.timetable.show_timetable',compact('start_time','end_time','course_name','teacher_name'));
    }

    public function studentTable()
    {
        if(session('role') == 'student'){

            $id = auth()->user()->id;
            $tableId = Student::find($id)->classRoom->timetable->orderBy('id', 'desc')->first()->id;
            // $classId = Student::where('user_id',auth()->user()->id)->select('class_room_id')->first();
            $courses = Timetable::find($id)->courses()->orderBy('days')->get();
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
        }
    }
}
