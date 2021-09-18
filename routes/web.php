<?php

use App\Http\Controllers\AdminController;
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
use App\Http\Controllers\TeacherDashboardController;
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

/****************** dash board routes ****************************/
Route::view('/student/dashboard', 'student.dashboard');
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/teacher/dashboard',[TeacherDashboardController::class,'index']);
Route::view('/parent/dashboard', 'parent.dashboard');

Route::get('/mycourse/teacher/{id}',[CourseContentController::class,'mycourse']);
Route::get('/content/upload/{id}',[CourseContentController::class,'create'])->name('content.create');
Route::post('/content/upload',[CourseContentController::class,'store'])->name('content.store');

/*************Student routes */
Route::post('status/change/student/{id}',[StudentController::class,'block'])->name('student.status');
/******************Teacher Routes **********/
Route::post('status/change/teacher/{id}',[TeacherController::class,'block'])->name('teacher.status');
/**********Admin Routes */
Route::post('status/change/teacher/{id}',[AdminController::class,'block'])->name('user.status');
/****************** Crud routes ***********************/
Route::resource('student', StudentController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('gaurdian',GaurdianController::class);
Route::resource('course', CourseController::class);
Route::resource('classRoom', ClassRoomController::class);
Route::resource('role', RoleController::class);
Route::resource('permission', PermissionController::class);

Route::post('/revoke/role/{id}',[AdminController::class,'revokeRole'])->name('role.revoke');


