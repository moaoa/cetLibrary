<?php

namespace App\Http\Controllers;

use App\Models\StudentFile;

class StudentFilesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($subject_id)
    {
        //
        return StudentFile::where('subject_id', $subject_id)
        ->where('representQuestions', false)
        ->where('isApproved', true)
        ->get();
    }
}
