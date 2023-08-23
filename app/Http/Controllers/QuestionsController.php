<?php

namespace App\Http\Controllers;

use App\Models\StudentFile;
use App\Models\TeacherFile;
use Illuminate\Http\Request;


class QuestionsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($subject_id)
    {
        //
        $studentFiles = StudentFile::
        where('subject_id', $subject_id)
        ->where('representQuestions', true)
        ->where('isApproved', true)
        ->get();

        $teacherFiles = TeacherFile::
        where('subject_id', $subject_id)
        ->where('representQuestions', true)
        ->get();

        return [...$studentFiles, $teacherFiles];
    }
}
