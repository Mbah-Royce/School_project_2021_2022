<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\LiveClass;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LiveClassController extends Controller
{
    public function startClass($id)
    { 
        $uuid = Str::uuid();
        $url = " https://aics-edusafe.herokuapp.com/room/".$uuid;
        $course =  Course::find($id)->liveClass()->create([
            'room_id' => $uuid,
            'link' =>  $url
        ]);
        echo "<script>window.open('".$url."', '_blank')</script>";    
    }

    public function studentJoin($id)
    {
       $uuid = LiveClass::where('course_id',$id)->select('room_id')->first()->toArray();
        if($uuid){
            // dd($uuid);
            // $uuid = urldecode($uuid);
            $url = " https://aics-edusafe.herokuapp.com/room/".$uuid['room_id'];
            echo "<script>window.open('".$url."', '_blank')</script>";    
        }
        else{
            return redirect()->back()->with('message','not now');
        }
    }

    public function stopClass()
    {
        
    }
}
