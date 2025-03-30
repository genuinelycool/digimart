<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UploadedFiles;
use App\Traits\FileUpload;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ItemController extends Controller
{
    use FileUpload;

    function index(): View
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

        $uploadedItems = UploadedFiles::where('author_id', user()->id)->where('category_id', session()->get('selected_category'))->get();

        return view('frontend.dashboard.item.create', compact('selectedCategory', 'categories', 'uploadedItems'));
    }

    function itemUploads(Request $request)
    {
        // dd($request->all());
        $categorySupportedExtensions = Category::find(session()->get('selected_category'))->file_types;
        $extensions = \Str::lower(implode(',', $categorySupportedExtensions));

        $request->validate([
            'file.*' => ['required', 'mimes:' . $extensions],
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

        $html = view('frontend.dashboard.layouts.partials.file-list-item', compact('uploadedFiles'))->render();

        return response()->json([
            'files' => $uploadedFiles,
            'html' => $html
        ], 200);
    }

    function uploadFile(UploadedFile $file, string $dir = "uploads/items", string $disk = "local"): ?array
    {
        // Validate disk type
        if (!in_array($disk, ['public', 'local'])) {
            throw new Exception("Invalid disk type. Must be either 'public' or 'local'");
        }

        // Handle file upload
        try {
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs($dir, $fileName, $disk);

            return [
                'name' => $file->getClientOriginalName(),
                'extension' => $file->getClientOriginalExtension(),
                'path' => "/$dir/$fileName",
                'size' => $file->getSize(),
                'mimeType' => $file->getMimeType()
            ];
        } catch (\Throwable $th) {
            throw $th;
        }

        return null;
    }

    function itemDestroy(string $id)
    {
        $file = UploadedFiles::whereId($id)->where('author_id', user()->id)->first();
        if (!$file) {
            return response()->json(['status' => 'error', 'message' => __('File not found')], 200);
        }

        try {
            $this->deleteFile($file->path, 'local');
            $file->delete();

            $uploadedFiles = UploadedFiles::where('author_id', user()->id)->where('category_id', session()->get('selected_category'))->get();

            return response()->json(['status' => 'success', 'message' => __('Item Removed successfully'), 'files' => $uploadedFiles], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => $th->getMessage()], 200);
        }
    }

    function storeItem(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'category' => ['required', 'exists:categories,id'],
            'sub_category' => ['required', 'exists:sub_categories,id'],
            'version' => ['required', 'string', 'max:20'],
            'demo_link' => ['nullable', 'url'],
            'tags' => ['required', 'array'],
            'preview_type' => ['required', 'in:image,video,audio'],
            'preview_file' => ['required'],
            'source_type' => ['required', 'in:upload,link'],
            'upload_source' => ['required_if:source_type,upload', 'nullable', 'string', 'max:255'],
            'link_source' => ['required_if:source_type,link', 'nullable', 'string', 'max:255'],
            'screenshots' => ['nullable'],
            'support' => ['required', 'in:0,1'],
            'support_instruction' => ['nullable'],
            'price' => ['required', 'numeric', 'min:1'],
            'discount_price' => ['nullable', 'numeric', 'min:0', 'lt:price'],
            'is_free' => ['required', 'in:0,1'],
            'message_for_reviewer' => ['nullable', 'max:1000']
        ],[
            'discount_price.lt' => __('The discount price must be less than the regular price.'),
        ]);

        dd('Request Pass');
    }
}
