<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Resource;

class ResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'playStorePath' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'appleStorePath' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'description' => $this->faker->text,
        ];
    }
}
