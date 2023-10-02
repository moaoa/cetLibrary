<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterSubjectsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Department $department, Semester $semester)
    {
        return view('semester_subjects_page', ['semester' => $semester, 'departmentName' => $department->name]);
    }
}
