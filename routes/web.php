<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\infoController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\classesController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\admincontrller;

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

Route::get('/subject', [App\Http\Controllers\SubjectController::class, 'subject'])->name('subject');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
##########################  info  ##########################

Route::resource('info',infoController::class);
Route::get('admin/info/index',[App\Http\Controllers\infoController::class, 'index'])->name('info');
#########################  teacher  ########################

Route::resource('teacher',teacherController::class);
Route::get('admin/teacher/index',[App\Http\Controllers\TeacherController::class, 'index'])->name('teacher');

########################  class  ###########################

Route::resource('classes',classesController::class);
Route::get('admin/classes/index',[App\Http\Controllers\classesController::class, 'index'])->name('class');

########################  subject  ###########################

Route::resource('subjectt',SubjectController::class);
Route::get('/admin/subject/',[App\Http\Controllers\SubjectController::class, 'index'])->name('subject.admin');
Route::get('/admin/subject/class/{id}',[App\Http\Controllers\SubjectController::class, 'class'])->name('subject.class');


########################  view  ###########################
Route::get('/about', [App\Http\Controllers\infoController::class, 'about'])->name('about');
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'teacher'])->name('teacher.user');
Route::get('/classes', [App\Http\Controllers\classesController::class, 'classes'])->name('classes');
Route::get('{id}', [App\Http\Controllers\SubjectController::class, 'class_user'])->name('subject.user');


########################  activity  ###########################
Route::resource('activity',activityController::class);
Route::get('/admin/activity/',[App\Http\Controllers\activityController::class, 'index'])->name('activity.admin');

################################   gruds   ###########################

Route::get('/admin', [App\Http\Controllers\admincontrller::class, 'admin' ])->Name('admin');

Route::get('admin/login', [App\Http\Controllers\admincontrller::class, 'adminlogin' ])->name('admin.login');
Route::POST('admin/login', [App\Http\Controllers\admincontrller::class, 'checkAdminlogin' ])->name('save.admin.login');

########################  middleware dashbord admin  ###########################

Route::get('admin/info/index',[App\Http\Controllers\infoController::class, 'dashbord'])->name('info.dashbord')->middleware('auth');;