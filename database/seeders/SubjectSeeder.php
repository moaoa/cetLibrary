<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // general department
        $generalDepartment = Department::where('name', 'العام')->first();

        $generalDepartmentJsonData = file_get_contents(database_path('seeders/seeds/generalDepartmentSubjects.json'));

        $generalDepartmentSubjectsForEachSemester = json_decode($generalDepartmentJsonData, true);

        foreach($generalDepartmentSubjectsForEachSemester as $key => $semesterCourses)
        {
            $semester = $generalDepartment->semesters()->where('order', (int)$key)->first();
            foreach ($semesterCourses as $courseName) {
                $subject = \App\Models\Subject::factory()->create([
                    'name' => $courseName
                ]);
                $semester->subjects()->attach($subject->id);
                $semester->save();
            }
        }



        // software engineering department
        $softwareEngineeringDepartment = Department::where('name', 'الحاسب الألي')->first();

        $softwareDepartmentSubjectsJsonData = file_get_contents(database_path('/seeders/seeds/softwareEngineeringSubjects.json'));

        $softwareEngineerigSubjectsForEachSemester = json_decode($softwareDepartmentSubjectsJsonData, true);


        foreach($softwareEngineerigSubjectsForEachSemester as $key => $semesterCourses)
        {
            $semester = $softwareEngineeringDepartment->semesters()->where('order', (int)$key)->first();
            foreach ($semesterCourses as $courseName) {
                $subject = \App\Models\Subject::factory()->create([
                    'name' => $courseName
                ]);
                $semester->subjects()->attach($subject->id);
                $semester->save();
            }
        }

    }
}
