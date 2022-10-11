<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);



Route::group(['middleware' => ['admin.role']], function () {
    Route::get('/courses', [CourseController::class, 'getAllCourses']);
    Route::get('/courses/{id}', [CourseController::class, 'getCourse']);
    Route::post('/courses', [CourseController::class, 'createCourse']);
    Route::put('/courses/{id}', [CourseController::class, 'updateCourse']);
});


Route::group(['middleware' => ['instructor.role']], function () {
    Route::get('/announcements', [AnnouncementController::class, 'getAllAnnouncements']);
});
