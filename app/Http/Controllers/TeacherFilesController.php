<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\TeacherFile;
use Illuminate\Http\Request;

class TeacherFilesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($subject_id, $teacher_id)
    {
        //
        $teacherFiles = TeacherFile::where('subject_id', $subject_id)
        ->where('representQuestions', false)
        ->where('teacher_id', $teacher_id)
        ->get();

        $subject = Subject::find($subject_id);

        return view('files_page', [
            'subject_name' => $subject->name,
            'files' => $teacherFiles
        ]);
    }
}
