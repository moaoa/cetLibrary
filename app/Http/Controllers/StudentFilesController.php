<?php

namespace App\Http\Controllers;

use App\Models\StudentFile;
use App\Models\Subject;

class StudentFilesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($subject_id)
    {
        $files = StudentFile::where('subject_id', $subject_id)
        ->where('representQuestions', false)
        ->where('isApproved', true)
        ->get();

        $subject = Subject::find($subject_id);

        return view('files_page', [
            'subject_name' => $subject->name,
            'files' => $files
        ]);
    }
}
