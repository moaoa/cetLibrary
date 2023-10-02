<?php

namespace App\Http\Controllers;

use App\Models\StudentFile;
use App\Models\Department;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Teacher;

class StudentFilesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Department $department, Semester $semester, Subject $subject)
    {
        $files = StudentFile::where('subject_id', $subject->id)
        ->where('representQuestions', false)
        ->where('isApproved', true)
        ->get();

        $subject = Subject::find($subject->id);

        return view('files_page', [
            'department_name' => $department->name,
            'semester_name' => $semester->name,
            'subject_name' => $subject->name,
            'files' => $files
        ]);
    }
}
