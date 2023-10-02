<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherFile;
use Illuminate\Http\Request;

class TeacherFilesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Department $department, Semester $semester, Teacher $teacher, Subject $subject)
    {
        //
        $teacherFiles = TeacherFile::where('subject_id', $subject->id)
        ->where('representQuestions', false)
        ->where('teacher_id', $teacher->id)
        ->get();

        $subject = Subject::find($subject->id);

        return view('files_page', [
            'department_name' => $department->name,
            'semester_name' => $semester->name,
            'subject_name' => $subject->name,
            'files' => $teacherFiles
        ]);
    }
}
