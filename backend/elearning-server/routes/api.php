<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AssignmentController;
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



Route::group(['middleware' => ['admin.role']], function () {
    Route::get('/courses', [CourseController::class, 'getAllCourses']);
    Route::get('/courses/{id}', [CourseController::class, 'getCourse']);
    Route::post('/courses', [CourseController::class, 'createCourse']);
    Route::put('/courses/{id}', [CourseController::class, 'updateCourse']);
});


Route::group(['middleware' => ['admin.instructor.role']], function () {
    Route::get('/announcements', [AnnouncementController::class, 'getAllAnnouncements']);
    Route::get('/announcements/{id}', [AnnouncementController::class, 'getAnnouncement']);
    Route::post('/announcements', [AnnouncementController::class, 'createAnnouncement']);
    Route::put('/announcements/{id}', [AnnouncementController::class, 'updateAnnouncement']);
    Route::delete('/announcements/{id}', [AnnouncementController::class, 'deleteAnnouncement']);
    Route::post('register', [AuthController::class, 'register']);
});


Route::group(['middleware' => ['instructor.role']], function () {
    Route::post('/assignments', [AssignmentController::class, 'createAssignment']);
    Route::put('/assignments/{id}', [AssignmentController::class, 'updateAssignment']);
    Route::delete('/assignments/{id}', [AssignmentController::class, 'deleteAssignment']);
    Route::get('/assignments', [AssignmentController::class, 'getAssignmentsByInstructor']);
});
