<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //teachers
        \App\Models\Teacher::factory(10)->create();

        $this->call([
            DepartmentSeeder::class,
            SemesterSeeder::class,
            SubjectSeeder::class,
            StudentFileSeeder::class,
            TeacherFileSeeder::class
        ]);

        // // software engineering
        // for($i = 0; $i < 10; $i++){
        //     \App\Models\Subject::factory()->create([
        //         'name' => 'subject ' . $i,
        //         'semester_id' => 2
        //     ]);
        // }

    }
}
