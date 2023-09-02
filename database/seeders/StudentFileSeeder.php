<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 4; $i++){
            \App\Models\StudentFile::factory()->create([
                'path' => 'asdf',
                'name' => 'yosef',
                'representQuestions' => false,
                'isApproved' => true,
                'subject_id' => 1,
            ]);
        }
        for($i = 0; $i < 4; $i++){
            \App\Models\StudentFile::factory()->create([
                'path' => 'asdf',
                'name' => 'mohammed',
                'representQuestions' => false,
                'isApproved' => true,
                'subject_id' => 2,
            ]);
        }

        for($i = 0; $i < 4; $i++){
            \App\Models\StudentFile::factory()->create([
                'path' => 'asdf',
                'name' => 'ahmed',
                'representQuestions' => true,
                'isApproved' => true,
                'subject_id' => 2,
            ]);
        }
    }
}
