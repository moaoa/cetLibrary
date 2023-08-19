<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\DepartmentStoreRequest;
use App\Http\Resources\Api\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
    public function index(Request $request): Response
    {
        $departments = Department::with('semesters')->get();

        return  response(DepartmentResource::collection($departments));
    }

    //TODO: to be removed
    public function indexWeb(Request $request)
    {
        $departments = Department::with('semesters')->get();

        return view('semester_page', ['departments' => DepartmentResource::collection($departments)]);
    }

    public function show($id): Response
    {
        $department = Department::find($id);

        return response(new DepartmentResource($department));
    }

    public function store(DepartmentStoreRequest $request): Response
    {
        $department = Department::create($request->validated());

        return response()->noContent(201);
    }
}
