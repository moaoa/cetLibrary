<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semester;

class SemesterSubjectsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $semester = Semester::find($id);

        return view('semester_subjects_page', ['semester' => $semester]);
    }
}
