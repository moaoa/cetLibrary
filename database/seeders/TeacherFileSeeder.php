<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 4; $i++){
            \App\Models\TeacherFile::factory()->create([
                'path' => 'asdf',
                'representQuestions' => false,
                'teacher_id' => 1,
                'subject_id' => 1,
            ]);
        }
        for($i = 0; $i < 4; $i++){
            \App\Models\TeacherFile::factory()->create([
                'path' => 'asdf',
                'representQuestions' => false,
                'teacher_id' => 2,
                'subject_id' => 2,
            ]);
        }

        for($i = 0; $i < 4; $i++){
            \App\Models\TeacherFile::factory()->create([
                'path' => 'qufasdf',
                'representQuestions' => true,
                'teacher_id' => 2,
                'subject_id' => 2,
            ]);
        }
    }
}
