<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\CourseContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GaurdianController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Permission;
use App\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'create']);
Route::post('/login',[LoginController::class,'store']);

Route::view('/student/dashboard', 'student.dashboard');
Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/teacher/dashboard', 'teacher.dashboard');
Route::view('/parent/dashboard', 'parent.dashboard');

Route::get('/mycourse/teacher/{id}',[CourseContentController::class,'mycourse']);

Route::resource('student', StudentController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('gaurdian',GaurdianController::class);
Route::resource('course', CourseController::class);
Route::resource('classRoom', ClassRoomController::class);
Route::resource('role', RoleController::class);
Route::resource('permission', PermissionController::class);