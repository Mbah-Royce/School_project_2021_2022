<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseContent;
use App\Models\CourseResult;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


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

    public function ass($id)
    {
        return view('teacher.upload_assignment',compact('id'));
    }

    public function createResult($id)
    {
        return view('teacher.upload_result',compact('id'));
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
            $path = "public/courses/" . $request->course_id ."/content";
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
        $role = session('role');
        $user = Auth::user();
        $contents = CourseContent::where('course_id',$id)->get();
        return view('teacher.course_content',compact('contents','user','role'));
    }

    public function destroy($id)
    {
        $content = CourseContent::find($id);
        if(deleteMedia($content->content_path)){
            $content->delete();
            return redirect()->back()->with('message','Content Deleted Successfully');
        }else{
            return redirect()->back()->with('error','An Error Occurred');
        }
        
    }

    public function downlaodFile($id)
    {
    $content = CourseContent::find($id);
    if (!Storage::exists($content)) {
        return redirect()->back()->with('error','File Not Found');
    }
    Storage::download($content->content_path);
    }

    public function storeResult(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course_id' => 'required',
            'file' => 'required|file|mime:pdf,csv'
        ]);

        if (!empty($request->file)) {
            $path = "public/courses/" . $request->course_id ."/results";
            $storePath = imageUpload($path,$request->file);
        }
        $courseResult = Course::find($request->course_id)->courseResult()->create([
            'name' => $request->name,
            'path' => $storePath
        ]);
    }
}
