<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SubjectStoreRequest;
use App\Http\Resources\Api\SubjectResource;
use App\Http\Resources\Api\FileResource;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FileController extends Controller
{
    public function index(Request $request): Response
    {
        $files = File::all();

        return response(FileResource::collection($files));
    }

    public function show($id): Response
    {
        $file = File::find($id);

        if(!$file) return response('id does not exist', 404);

        return response(new FileResource($file));
    }

    public function store(Request $request): Response
    {
        try {
             $request->validate([
                'file' => 'required|mimes:pdf|max:1048'
                ]);
            $fileModel = new File;

            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            //$fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->isApproved = false;
            $fileModel->save();

            return response('saved');
        } catch (\Throwable $th) {
            //throw $th;
            return response('the file must be pdf and less than 2 mb', 419);
        }
    }
    public function adminUpload(Request $request): Response
    {
        try {
            //code...
            $request->validate([
                'file' => 'required|mimes:pdf|max:2048'
                ]);
            $fileModel = new File;

            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            //$fileModel->name = time().'_'.$request->file->getClientOriginalName();
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->isApproved = true;
            $fileModel->save();
        } catch (\Throwable $th) {
            //throw $th;
            return response('the file must be pdf and less than 2 mb', 419);
        }

        return response('saved');
    }
}
