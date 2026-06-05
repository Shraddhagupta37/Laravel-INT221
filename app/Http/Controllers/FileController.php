<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function uploadForm()
    {
        return view('UploadForm');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'cv' => 'required|file',
            'profile' => 'required|image'
        ]);

        $cvpath = $request->file('cv')->store('uploads', 'public');
        $profilepath = $request->file('profile')->store('uploads', 'public');
        return "File uploaded successfully!";
    }

    public function download($filename)
    {
        return response()->download(
            storage_path('app/public/uploads/' . $filename)
        );
    }
}
