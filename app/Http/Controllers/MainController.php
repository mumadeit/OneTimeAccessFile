<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Str;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {

        sleep(10);

        $validatedData = $request->validate([
            'file' => ['required', 'file', 'max:10240'],
        ]);

        $uploadedFile = $validatedData['file'];
        $fileName = time() . '_' . Str::random(30);
        $filePath = $uploadedFile->storeAs('files', $fileName, 'public');

        $file = File::create([
            'short_url' => Str::random(10),
            'file_path' => $filePath,
        ]);

        if ($file) {
            return redirect()->back()->with('success', 'File uploaded successfully!' . ' ' . request()->getSchemeAndHttpHost() . '/' . $file->short_url);
        }

        return redirect()->back()->with('error', 'File upload failed.');
    }

    public function download($short_url)
    {

        try {
            $file = File::where('short_url', $short_url)->firstOrFail();
            $filePath = storage_path('app/public/' . $file->file_path);
            $file->delete();
            return response()->download($filePath)->deleteFileAfterSend(true);
        } catch (\Exception $e) {
            abort(404)->with('error', 'File not found.');
        }
    }
}
