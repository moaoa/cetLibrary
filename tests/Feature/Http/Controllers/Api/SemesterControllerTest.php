<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Semester;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Api\SemesterController
 */
class SemesterControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_behaves_as_expected(): void
    {
        $semesters = Semester::factory()->count(3)->create();

        $response = $this->get(route('semester.index'));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Api\SemesterController::class,
            'store',
            \App\Http\Requests\Api\SemesterStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_responds_with(): void
    {
        $name = $this->faker->name;

        $response = $this->post(route('semester.store'), [
            'name' => $name,
        ]);

        $semesters = Semester::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $semesters);
        $semester = $semesters->first();

        $response->assertNoContent(201);
    }
}
