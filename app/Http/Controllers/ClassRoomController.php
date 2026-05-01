<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Course;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classRooms = ClassRoom::all();
        return view('admin.classRoom.index',compact('classRooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classRoom.create');
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
            'name' => 'required|string',
            'capacity' => 'required|integer'
        ]);
        ClassRoom::create([
            'name' => $request->name,
            'capacity' => $request->capacity
        ]);
        return redirect()->back()->with('message','Class Created Successfully');
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
        $classRoom = ClassRoom::findorfail($id);
        return view('admin.classRoom.edit',compact('classRoom'));
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
            'name' => 'required|string',
            'capacity' => 'required|integer'
        ]);
        $classRoom = ClassRoom::findorfail($id);
        $classRoom->update([
            'name' => $request->name,
            'capacity' => $request->capacity
        ]);
        return redirect()->back()->with('message','Class updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClassRoom::findorfail($id)->delete();
        return redirect()->back()->with('message','Class Deleted Successfully');
    }
}
