<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontController, TeacherController,StudentController};
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


Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('terms-conditions', [FrontController::class, 'terms']);
Route::get('privacy-policy', [FrontController::class, 'privacy']);
Route::get('login', [FrontController::class, 'signIn']);
Route::get('signup', [FrontController::class, 'register']);
Route::post('newuser', [FrontController::class, 'saveUser']);
Route::post('login-check', [FrontController::class, 'authenticate']);
Route::get('logout', [FrontController::class, 'logout']);

//Teacher
Route::middleware(['teacher'])->group(function () {
    Route::get('teacher-dashboard', [TeacherController::class, 'dashboard']);
    Route::get('new-meeting', [TeacherController::class, 'newMeeting']);
    Route::post('save-meeting', [TeacherController::class, 'saveMeeting']);
    Route::get('add-student', [TeacherController::class, 'addStudent']);
    Route::post('save-student', [TeacherController::class, 'saveStudent']);
    Route::get('link-student', [TeacherController::class, 'linkStudent']);
    Route::post('attach-student', [TeacherController::class, 'attachStudent']);
    Route::get('all-students', [TeacherController::class, 'allStudents']);
    Route::get('all-meetings', [TeacherController::class, 'allMeetings']);
    Route::get('zoom-test', [TeacherController::class, 'meetingApi']);
    Route::get('change-password', [FrontController::class, 'changePassword']);
    Route::post('update-password', [FrontController::class, 'updatePassword']);

});
//End Teacher

//Student
Route::middleware(['student'])->group(function () {
    Route::get('student-dashboard', [StudentController::class, 'dashboard']);
    Route::get('change-password', [FrontController::class, 'changePassword']);
    Route::post('update-password', [FrontController::class, 'updatePassword']);
   Route::get('online-classes', [StudentController::class, 'zoomMeetings']);
});
//End Student


Route::get("/cache",function(){
 Artisan::call("cache:clear");
});

Route::get("/storage",function(){
    Artisan::call("storage:link");
});

Route::get("/config-clear",function(){
    Artisan::call("config:clear");
});

Route::get("/route-clear",function(){
    Artisan::call("route:clear");
});

Route::get("/view-clear",function(){
    Artisan::call("view:clear");
});