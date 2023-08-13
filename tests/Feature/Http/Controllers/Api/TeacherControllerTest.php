<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Api\TeacherController
 */
class TeacherControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_behaves_as_expected(): void
    {
        $teachers = Teacher::factory()->count(3)->create();

        $response = $this->get(route('teacher.index'));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Api\TeacherController::class,
            'store',
            \App\Http\Requests\Api\TeacherStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_responds_with(): void
    {
        $name = $this->faker->name;

        $response = $this->post(route('teacher.store'), [
            'name' => $name,
        ]);

        $teachers = Teacher::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $teachers);
        $teacher = $teachers->first();

        $response->assertNoContent(201);
    }
}
