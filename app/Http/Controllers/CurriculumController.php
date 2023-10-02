<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Semester;
use App\Models\StudentFile;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Department $department, Semester $semester, Subject $subject)
    {
        $teachersWithFilesOnCurrentSubject = DB::table('teacher_files')
            ->join('teachers', 'teacher_files.teacher_id', '=', '.teachers.id')
            ->select('teachers.id as teacher_id', 'teachers.name')
            ->where('teacher_files.subject_id', $subject->id)
            ->distinct()
            ->get();

        $students_files = StudentFile::where('subject_id', $subject->id)->get();

        $result = [
            'subject_id' => $subject->id,
            'subject_name' => $subject->name,
            'department_name' => $department->name,
            'semester_name' => $semester->name,
            'teacher_curriculums' => $teachersWithFilesOnCurrentSubject,
            'student_curriculum' => count($students_files) > 0,
        ];

        return view('subject_curriculums_page', $result);
    }
}
