<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        $teacher = Teacher::where('user_id',auth()->user()->id)->first();
        $courses = $teacher->course()->select('id','name','coef','duration')->get();
        return view('teacher.dashboard',compact('courses'));
    }
}
