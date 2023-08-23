<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeacherFile extends Model
{
    use HasFactory;

    public function subjectTeacher(): BelongsTo
    {
        return $this->belongsTo(SubjectTeacher::class);
    }
}
