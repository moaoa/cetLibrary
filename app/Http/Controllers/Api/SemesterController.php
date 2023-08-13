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
        $semesters = Semester::all();

        return  response(SemesterResource::collection($Semester));
    }

    public function store(SemesterStoreRequest $request): Response
    {
        $semester = Semester::create($request->validated());

        return response()->noContent(201);
    }
}