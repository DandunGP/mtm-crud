<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\UserCourseController;
use Illuminate\Support\Facades\Route;

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

// USER COURSE
Route::get('/', [UserCourseController::class, 'index']);
Route::get('/add', [UserCourseController::class, 'create']);
Route::post('/', [UserCourseController::class, 'store']);
Route::get('/edit/{userCourse}', [UserCourseController::class, 'edit']);
Route::put('/{userCourse}', [UserCourseController::class, 'update']);
Route::delete('/{userCourse}', [UserCourseController::class, 'destroy']);

// MEMBER
Route::get('/member/', [MemberController::class, 'index']);
Route::get('/member/add', [MemberController::class, 'create']);
Route::post('/member/', [MemberController::class, 'store']);
Route::get('/member/edit/{member}', [MemberController::class, 'edit']);
Route::put('/member/{member}', [MemberController::class, 'update']);
Route::delete('/member/{member}', [MemberController::class, 'destroy']);


// COURSE
Route::get('/course/', [CourseController::class, 'index']);
Route::get('/course/add', [CourseController::class, 'create']);
Route::post('/course/', [CourseController::class, 'store']);
Route::get('/course/edit/{course}', [CourseController::class, 'edit']);
Route::put('/course/{course}', [CourseController::class, 'update']);
Route::delete('/course/{course}', [CourseController::class, 'destroy']);

// MENTOR
Route::get('/mentor/', [MentorController::class, 'index']);
Route::get('/mentor/add', [MentorController::class, 'create']);
Route::post('/mentor/', [MentorController::class, 'store']);
Route::get('/mentor/edit/{mentor}', [MentorController::class, 'edit']);
Route::put('/mentor/{mentor}', [MentorController::class, 'update']);
Route::delete('/mentor/{mentor}', [MentorController::class, 'destroy']);
