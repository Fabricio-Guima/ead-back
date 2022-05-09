<?php

use App\Http\Controllers\Api\{
    CourseController,
    ModuleController,
    LessonController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Courses
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);

//Modules from courses
Route::get('/courses/{id}/modules',  [ModuleController::class, 'index']);

//Lessons
Route::get('/modules/{id}/lessons',  [LessonController::class, 'index']);
Route::get('/lessons/{id}',  [LessonController::class, 'show']);


Route::get('/', function () {
    return response()->json(['success' => true]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
