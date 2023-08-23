<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/posting', function () {
    return view('posting_page');
})->name('posting');

Route::get('/questions', function () {
    return view('questions_page');
})->name('question');

route::get('/study_apps', function () {
    return view('study_apps_page');
})->name('study_apps_page');

// route::get('/study_materials', function () {
//     return view('study_materials_page');
// })->name('study_materials_page');

// the methods that end with 'web' are a temporary solution to load api endpoints into the web.php endpoints
Route::get('/departments', [App\Http\Controllers\Api\DepartmentController::class, 'indexWeb'])->name('departments_page');

Route::get('/semester/{id}', [App\Http\Controllers\Api\SemesterController::class, 'showWeb'])->name('study_materials_page');

Route::get('/curriculum/{subject_id}', App\Http\Controllers\CurriculumController::class);

Route::get('/subject_questions/{subject_id}', App\Http\Controllers\QuestionsController::class);

Route::get('/teacher_curriculum/{subject_id}', App\Http\Controllers\TeacherFilesController::class);

Route::get('/student_curriculum/{subject_id}', App\Http\Controllers\StudentFilesController::class);

Route::get('/subjects', function () {
    return view('subjects_page');
})->name('subjects_page');



