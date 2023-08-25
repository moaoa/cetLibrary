<?php

namespace App\Http\Controllers;

use App\Models\StudentFile;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $subject_id)
    {
        $subjectName = Subject::find($subject_id)->name;
        
        $teachersWithFilesOnCurrentSubject = DB::table('teacher_files')
            ->join('teachers', 'teacher_files.teacher_id', '=', '.teachers.id')
            ->select('teachers.id', 'teachers.name')
            ->where('teacher_files.subject_id', $subject_id)
            ->distinct()
            ->get();

        $students_files = StudentFile::where('subject_id', $subject_id)->get();

        return [
            'subject_name' => $subjectName,
            'teacher_curriculums' => $teachersWithFilesOnCurrentSubject,
            'student_curriculum' => count($students_files) > 0,
        ];
    }
}
