<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\CourseContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GaurdianController;
use App\Http\Controllers\LiveClassController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\TimeTableManagement;


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

Route::view('/', 'welcome')->name('home');
Route::view('/service', 'services')->name('service');
Route::view('/contact', 'contact')->name('contact');
Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('/login',[LoginController::class,'store']);

/****************** dash board routes ****************************/
Route::get('/student/dashboard',[StudentController::class,'displayDashboard']);
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/teacher/dashboard',[TeacherDashboardController::class,'index']);
Route::view('/parent/dashboard', 'parent.dashboard');

Route::get('/mycourse/teacher/{id}',[CourseContentController::class,'mycourse']);
Route::get('/content/upload/{id}',[CourseContentController::class,'create'])->name('content.create');
Route::post('/content/upload',[CourseContentController::class,'store'])->name('content.store');
Route::get('/result/upload{id}',[CourseContentController::class,'createResult'])->name('result.create');
Route::post('/result/upload',[CourseContentController::class,'ResultStore'])->name('result.store');
Route::get('/content/upload/ass/{id}',[CourseContentController::class,'ass'])->name('content.ass');

/*************Student routes */
Route::post('status/change/student/{id}',[StudentController::class,'block'])->name('student.status');
Route::get('student/timetable',[TimetableController::class,'studentTable'])->name('student.table');
/******************Teacher Routes **********/
Route::post('change/teacher/{id}',[TeacherController::class,'block'])->name('teacher.status');
Route::get('content/show/{id}',[CourseContentController::class,'show'])->name('content.show');
Route::delete('content/delete/{id}',[CourseContentController::class,'destroy'])->name('content.destroy');
Route::get('content/download/{id}',[CourseContentController::class,'downlaodFile'])->name('content');
Route::get('content/view/{file}',[CourseContentController::class,'view'])->name('content.view');

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
Route::get('/start/class',[LiveClassController::class,'startClass']);

Route::get('table',[TimetableController::class,'create'])->name('table.create');
Route::get('table/all',[TimetableController::class,'index'])->name('table.index');
Route::post('table',[TimetableController::class,'store'])->name('table.store');
Route::get('timetable',[TimeTableManagement::class,'create'])->name('timetable.create');
Route::post('timetable',[TimeTableManagement::class,'store'])->name('timetable.store');
Route::get('timetable/show/{id}',[TimeTableManagement::class,'show'])->name('timetable.show');



