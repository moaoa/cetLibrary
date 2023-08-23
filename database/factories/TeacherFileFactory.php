<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TeacherFile;

class TeacherFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeacherFile::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->name,
            'representQuestions' => false,
            'teacher_id' => 1,
            'subject_id' => 1
        ];
    }
}
