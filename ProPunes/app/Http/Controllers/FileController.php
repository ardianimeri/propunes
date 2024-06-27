<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        // Retrieve all files
        $files = File::all();

        // Return a view with the list of files
        return view('files.index')->with(['files' => $files]);
    }

    public function create()
    {
        return view('files.upload');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);

        $existingFile = File::where('user_id', Auth::id())->first();
        if ($existingFile) {
            return back()->withErrors(['file' => 'You have already uploaded a file.']);
        }

        // Handle the file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileContent = file_get_contents($file->getRealPath());

            

            // Save file information in the database
            $fileModel = new File;
            $fileModel->file_name = $fileName;
            $fileModel->file_content = $fileContent;
            $fileModel->user_id = auth()->id();
            $fileModel->save();

            return back()->with('success', 'File has been uploaded successfully.');
        }

        return back()->withErrors(['file' => 'Please select a file to upload.']);
    }

    public function show($id)
    {
        // Retrieve the file by its ID
        $file = File::findOrFail($id);

        // Return a view with the file details
        return view('files.show', compact('file'));
    }

    
    public function download($id)
    {
        $file = File::findOrFail($id);

        return response($file->file_content)
            ->header('Content-Type', 'application/octet-stream')
            ->header('Content-Disposition', 'attachment; filename="' . $file->file_name . '"');
    }

    public function destroy($id)
    {
        $files = File::findOrFail($id);
        $files->delete();
        
        return redirect()->route('files.index')->with('success', 'User deleted successfully');
    }
}
