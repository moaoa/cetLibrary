<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Semester;

class SemesterSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = Subject::all();
        $semesters = Semester::all();

        // Seed the pivot table
        foreach ($subjects as $subject) {
            // $subject->semesters()->attach($semesters->random());
            // $subject->save();
        }
    }
}
