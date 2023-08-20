<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SemesterStoreRequest;
use App\Http\Resources\Api\SemesterResource;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SemesterController extends Controller
{
    public function index(Request $request): Response
    {
        $semesters = Semester::with('subjects')->get();

        return  response(SemesterResource::collection($semesters));
        //return  response($semesters);
    }

    public function store(SemesterStoreRequest $request): Response
    {
        $semester = Semester::create($request->validated());

        return response()->noContent(201);
    }

    public function show($id): Response
    {
        $semester = Semester::find($id);

        return response(new SemesterResource($semester));
    }
    public function showWeb($id)
    {
        $semester = Semester::find($id);

        // dd(new SemesterResource($semester));
        return view('study_materials_page', ['semester' => new SemesterResource($semester)]);
    }
}
