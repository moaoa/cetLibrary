<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//teacher
Route::resource('teacher', App\Http\Controllers\Api\TeacherController::class)->only('index', 'store');

//semester
Route::resource('semester', App\Http\Controllers\Api\SemesterController::class)->only('index', 'store', 'show');

//subjects
Route::resource('subject', App\Http\Controllers\Api\SubjectController::class)->only('index', 'show', 'store');

//departments
Route::resource('department', App\Http\Controllers\Api\DepartmentController::class)->only('index', 'show', 'store');

//files
Route::resource('file', App\Http\Controllers\Api\FileController::class)->only('index', 'show', 'store');

Route::post('file/admin-upload', [App\Http\Controllers\Api\FileController::class, 'adminUpload']);
