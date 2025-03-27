<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UploadedFiles;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ItemController extends Controller
{
    function index() : View
    {
        $categories = Category::all();
        return view('frontend.dashboard.item.index', compact('categories'));
    }

    function create(Request $request)
    {
        $categories = Category::all();
        $selectedCategory = Category::with('subCategories')->whereSlug($request->category)->firstOrFail();

        // put category id on session
        session()->put('selected_category', $selectedCategory->id);

        return view('frontend.dashboard.item.create', compact('selectedCategory', 'categories'));
    }

    function itemUploads(Request $request)
    {
        // dd($request->all());
        $categorySupportedExtensions = Category::find(session()->get('selected_category'))->file_types;
        $extensions = \Str::lower(implode(',', $categorySupportedExtensions));

        $request->validate([
            'file.*' => ['required', 'mimes:'. $extensions],
        ]);

        foreach ($request->file('file') as $file) {
            $fileInfo = $this->uploadFile($file);

            if ($fileInfo) {
                $uploadedFile = new UploadedFiles();
                $uploadedFile->category_id = session()->get('selected_category');
                $uploadedFile->author_id = user()->id;
                $uploadedFile->name = $fileInfo['name'];
                $uploadedFile->extension = $fileInfo['extension'];
                $uploadedFile->mime_type = $fileInfo['mimeType'];
                $uploadedFile->path = $fileInfo['path'];
                $uploadedFile->size = $fileInfo['size'];
                $uploadedFile->save();
            }
        }

        $uploadedFiles = UploadedFiles::where('author_id', user()->id)->where('category_id', session()->get('selected_category'))->get();

        return response()->json([
            'files' => $uploadedFiles
        ], 200);
    }

    function uploadFile(UploadedFile $file, string $dir = "uploads", string $disk = "local") : ?array
    {
        // Validate disk type
        if (!in_array($disk, ['public', 'local'])) {
            throw new Exception("Invalid disk type. Must be either 'public' or 'local'");
        }

        // Handle file upload
        try {
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
            $file->storeAs($dir, $fileName, $disk);

            return [
                'name' => $file->getClientOriginalName(),
                'extension' => $file->getClientOriginalExtension(),
                'path' => "/$dir/files/$fileName",
                'size' => $file->getSize(),
                'mimeType' => $file->getMimeType()
            ];

        } catch (\Throwable $th) {
            throw $th;
        }

        return null;
    }
}
