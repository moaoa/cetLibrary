<?php

namespace App\Http\Controllers;

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
        return TeacherFile::where('subject_id', $subject_id)
        ->where('representQuestions', false)
        ->where('teacher_id', $teacher_id)
        ->get();
    }
}