<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\StudentFile;

class StudentFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentFile::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->name,
            'representQuestions' => false,
            'subject_id' => 1
        ];
    }
}
