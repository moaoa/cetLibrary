<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SubjectStoreRequest;
use App\Http\Resources\Api\SubjectResource;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectController extends Controller
{
    public function index(Request $request): Response
    {
        $subjects = Subject::all();

        return response(SubjectResource::collection($subjects));
    }

    public function show($id): Response
    {
        $subject = Subject::find($id);

        return response(new SubjectResource($subject));
    }

    public function store(SubjectStoreRequest $request): Response
    {
        //TODO: fix this endpiont
        $subject = Subject::create($request->validated());

        return response()->noContent(201);
    }
}
