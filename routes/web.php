<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\SemesterSubjectsController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\TeacherFilesController;
use App\Http\Controllers\StudentFilesController;
use App\Models\Department;
use App\Models\Semester;
use App\Models\Subject;
use Mockery\Matcher\Subset;

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
    return view('posting_page', 
    [
    'departments' => Department::all(), 
    'semesters' => Semester::with('subjects')->get(), 
    ]);
})->name('posting');

Route::get('/posting', function () {
    return  [
    'departments' => Department::all(), 
    'semesters' => Semester::with('subjects')->get(), 
    ];
});

route::get('/study_apps', function () {
    return view('study_apps_page');
})->name('study_apps_page');


Route::prefix('/departments')->group(function(){
    //TODO: remove this controller form the api controllers 
    Route::get('/', [DepartmentController::class, 'indexWeb'])->name('departments.index');
    Route::prefix('/{department:slug}/semesters')->group(function(){
       Route::get('/{semester}', SemesterSubjectsController::class)->scopeBindings()->name('semester.subjects');
       Route::get('/{semester}/curriculum/{subject}', CurriculumController::class)->scopeBindings();
       Route::get('/{semester}/questions/{subject}', QuestionsController::class)->scopeBindings();
       Route::get('/{semester}/teachers/{teacher}/{subject}', TeacherFilesController::class)->scopeBindings();
       Route::get('/{semester}/students-sharing/{subject}', StudentFilesController::class)->scopeBindings();
    }); 
});
