<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SubjectStoreRequest;
use App\Http\Resources\Api\SubjectResource;
use App\Http\Resources\Api\StudentFileResource;
use App\Models\StudentFile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class StudentFileController extends Controller
{
    public function index(Request $request): Response
    {
        $files = StudentFile::all();

        return response(StudentFileResource::collection($files));
    }

    public function show($id): Response
    {
        $file = StudentFile::find($id);

        if(!$file) return response('id does not exist', 404);

        return response(new StudentFileResource($file));
    }

    public function store(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf|max:1048',
        ]);

        if ($validator->fails()) {
            return response('the file must be pdf and less than 2 mb', 419);
        }

        try {
            $fileModel = new StudentFile;

            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            //$fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->isApproved = false;
            $fileModel->representQuestions = false;
            $fileModel->save();


            return response('saved');
        } catch (\Throwable $th) {
            // throw $th;
            return response('internal error' . $th, 500);
        }
    }
    public function adminUpload(Request $request): Response
    {
        try {
            //code...
            $request->validate([
                'file' => 'required|mimes:pdf|max:2048'
                ]);
            $fileModel = new StudentFile;

            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            //$fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->isApproved = true;
            $fileModel->representQuestions = false;
            $fileModel->save();
        } catch (\Throwable $th) {
            // throw $th;
            return response('the file must be pdf and less than 2 mb', 419);
        }

        return response('saved');
    }
}
