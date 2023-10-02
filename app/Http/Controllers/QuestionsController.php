<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Semester;
use App\Models\StudentFile;
use App\Models\TeacherFile;
use Illuminate\Http\Request;
use App\Models\Subject;


class QuestionsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Department $department, Semester $semester, Subject $subject)
    {
        //
        $studentFiles = StudentFile::
        where('subject_id', $subject->id)
        ->where('representQuestions', true)
        ->where('isApproved', true)
        ->get();

        $teacherFiles = TeacherFile::
        where('subject_id', $subject->id)
        ->where('representQuestions', true)
        ->get();

        $subject = Subject::find($subject->id);

        return view('questions_page', [
            'subject_name' => $subject->name,
            'files' => [...$studentFiles, ...$teacherFiles],
            'department_name' => $department->name,
            'semester_name' => $semester->name
        ]);
    }
}
