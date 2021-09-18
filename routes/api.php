<?php

use App\Models\ClassRoom;
use App\Models\Course;
use App\Models\Field;
use App\Models\gaurdian;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/total',function(){
    $totalUsers = User::all()->count();
    $users = User::where('status',true)->get()->count();
    $data['data'] = [
        'Toatal_user' => $totalUsers
    ];
    return response()->json($data);
});

Route::get('/users',function(){
    $teacher = Teacher::all()->count();
    $student = Student::all()->count();
    $gaurdian = gaurdian::all()->count();
    $users = User::where('status',true)->get()->count();
    $data['data'] = [$student,$teacher,$gaurdian];
    return response()->json($data);
});

Route::get('/students',function(){
    $male = User::join('students', 'students.user_id', '=', 'users.id')
    ->where('users.gender','male')
    ->get();
    $female = User::join('students', 'students.user_id', '=', 'users.id')
    ->where('users.gender','female')
    ->get();
    $data['data'] = [count($male),count($female)];
    return response()->json($data);
});

Route::get('/courses',function(){
    $courses = Course::all()->count();
    $data['data'] = [$courses];
    return response()->json($data); 
});

Route::get('/class',function(){
    $courses = ClassRoom::all()->count();
    $data['data'] = [$courses];
    return response()->json($data); 
});

Route::get('/field',function(){
    $SE = Field::join('students', 'students.field_id', '=', 'fields.id')
    ->where('fields.name','Software Engineering')
    ->get();
    $GL = Field::join('students', 'students.field_id', '=', 'fields.id')
    ->where('fields.name','Genie Logiciel')
    ->get();
    // $NM = Field::join('students', 'students.user_id', '=', 'fields.id')
    // ->where('fields.name','Network Maintenance')
    // ->get();
    $SR = Field::join('students', 'students.field_id', '=', 'fields.id')
    ->where('fields.name','System et Resaux')
    ->get();
    $data['data'] = [count($SE),count($GL),count($SR)];
    return response()->json($data); 
});