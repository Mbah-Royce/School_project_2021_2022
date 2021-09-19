<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseContent;
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

    public function create($id)
    {
        return view('teacher.upload',compact('id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'file' => 'required|file|max:2048',
            'course_id' => 'required',
            'title' => 'required|string'
        ]);

        if (!empty($request->file)) {
            $path = "public/courses/" . $request->course_id ."/folder";
            $storePath = imageUpload($path,$request->file);
        }

        $coures = Course::find($request->course_id)->content()->create([
            'type' => $request->type,
            'title' => $request->title,
            'content_path' => $storePath,
            'content_type' =>  $request->file->getMimeType(),
        ]);
        return redirect()->back()->with('message','Content Created Successfully');
    }

    public function show($id)
    {
        $contents = CourseContent::where('course_id',$id)->get();
        return view('teacher.course_content',compact('contents'));
    }

    public function destroy($id)
    {
        $content = CourseContent::find($id)->delete();
        return redirect()->back()->with('message','Content Deleted Successfully');
    }

    public function downlaod(Request $request,$file)
    {
        return response()->downlaod(public_path($file));
    }
}
