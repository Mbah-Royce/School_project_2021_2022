<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseContentController extends Controller
{
    public function mycourse($id)
    {
        $teacher = Teacher::find($id);
        $courses = $teacher->course()->select('id','name','coef','duration')->get();
        return view('teacher.mycourse',compact('courses'));
    }
}
