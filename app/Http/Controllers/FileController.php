<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function uploadForm()
    {
        return view('UploadForm');
    }

    public function upload() {
        // Handle file upload logic here
        return "File uploaded successfully!";
    }

    public function download(Request $request)
    {
        $path = $request->file('files')->store('uploads', 'public'); // Store the uploaded file in the 'uploads' directory
        return response()->download(storage_path('app/public/' . $path));
    }
}
