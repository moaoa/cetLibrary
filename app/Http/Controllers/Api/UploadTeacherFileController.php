<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SubjectStoreRequest;
use App\Http\Resources\Api\SubjectResource;
use App\Http\Resources\Api\StudentFileResource;
use App\Models\TeacherFile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class UploadTeacherFileController extends Controller
{
    public function store(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf|max:10048',
            'subject_id' => 'required|exists:subjects,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        if ($validator->fails()) {
            return response('the file must be pdf and less than 2 mb', 419);
        }

        try {
            $fileModel = new TeacherFile();

            $fileName = time().'_'.$request->file->getClientOriginalName();
            $teacherId = $request->teacher_id;
            $subjectId = $request->subject_id;
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->subject_id = $subjectId;
            $fileModel->teacher_id = $teacherId;
            $fileModel->name =  $request->file->getClientOriginalName();
            $fileModel->isApproved = false;
            $fileModel->representQuestions = false;
            $fileModel->save();


            return response('saved');
        } catch (\Throwable $th) {
            // throw $th;
            return response('internal error' . $th, 500);
        }
    }
}
