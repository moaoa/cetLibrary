<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'department' => DepartmentResource::make($this->whenLoaded('department')),
            'teachers' => TeacherResource::make($this->whenLoaded('teachers')),
        ];
    }
}
