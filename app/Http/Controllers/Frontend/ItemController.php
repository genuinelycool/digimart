<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ItemStoreRequest;
use App\Http\Requests\Frontend\ItemUpdateRequest;
use App\Models\Category;
use App\Models\Item;
use App\Models\UploadedFiles;
use App\Services\NotificationService;
use App\Traits\FileUpload;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    use FileUpload;

    function index(): View
    {
        $categories = Category::all();
        $items = Item::with(['category', 'subCategory'])->where('author_id', user()->id)->paginate(15);

        return view('frontend.dashboard.item.index', compact('categories', 'items'));
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

    function storeItem(ItemStoreRequest $request): JsonResponse
    {
        $item = new Item();
        $item->author_id = user()->id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->sub_category_id = $request->sub_category;
        $item->version = $request->version;
        $item->demo_link = $request->demo_link;
        $item->tags = explode(',', $request->tags);
        $item->preview_type = $request->preview_type;
        $item->preview_image = $request->preview_file;
        $item->preview_video = $request->preview_file;
        $item->preview_audio = $request->preview_file;
        $item->main_file = $request->source_type == 'upload' ? $request->upload_source : $request->link_source;
        $item->is_main_file_external = $request->source_type == 'upload' ? 0 : 1;
        $item->screenshots = $request->screenshots;
        $item->price = $request->price;
        $item->discount_price = $request->discount_price;
        $item->is_supported = $request->support;
        $item->support_instruction = $request->support_instruction;
        $item->status = 'pending';
        $item->is_free = $request->is_free;
        $item->save();

        /** Move public files in public folder */
        $publicFiles = $request->screenshots ?? [];
        $publicFiles[] = $request->preview_file;
        foreach ($publicFiles as $file) {
            if (File::exists(storage_path('app/private/' . $file))) {
                File::move(storage_path('app/private/' . $file), public_path($file));
            }
        }

        NotificationService::CREATED();

        return response()->json(['status' => 'success', 'redirect' => route('user.items.index')], 200);
    }

    function itemEdit(string $id): View
    {
        $categories = Category::all();
        $item = Item::with(['category', 'subCategory'])->where('id', $id)->where('author_id', user()->id)->firstOrFail();

        $uploadedItems = UploadedFiles::where('author_id', user()->id)->where('category_id', $item->category_id)->get();

        // put category id on session
        session()->put('selected_category', $item->category->id);

        return view('frontend.dashboard.item.edit', compact('categories', 'item', 'uploadedItems'));
    }

    function itemUpdate(ItemUpdateRequest $request, string $id)
    {
        $item = Item::where('id', $id)->where('author_id', user()->id)->firstOrFail();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->version = $request->version;
        $item->demo_link = $request->demo_link;
        $item->tags = explode(',', $request->tags);
        if($request->filled('preview_type')) $item->preview_type = $request->preview_type;
        if($request->filled('preview_file')) $item->preview_image = $request->preview_file;
        if($request->filled('preview_file')) $item->preview_video = $request->preview_file;
        if($request->filled('preview_file')) $item->preview_audio = $request->preview_file;
        if($request->filled('source_type')) $item->main_file = $request->source_type == 'upload' ? $request->upload_source : $request->link_source;
        if($request->filled('source_type')) $item->is_main_file_external = $request->source_type == 'upload' ? 0 : 1;
        if($request->filled('screenshots')) $item->screenshots = $request->screenshots;
        $item->price = $request->price;
        $item->discount_price = $request->discount_price;
        $item->is_supported = $request->support;
        $item->support_instruction = $request->support_instruction;
        $item->status = 'resubmitted';
        $item->is_free = $request->is_free;
        $item->save();

        /** Move public files in public folder */
        $publicFiles = $request->screenshots ?? [];
        if($request->filled('preview_file')) $publicFiles[] = $request->preview_file;

        foreach ($publicFiles as $file) {
            if (File::exists(storage_path('app/private/' . $file))) {
                File::move(storage_path('app/private/' . $file), public_path($file));
            }
        }

        UploadedFiles::where('category_id', $item->category_id)->where('author_id', user()->id)?->delete();

        NotificationService::UPDATED();

        return response()->json(['status' => 'success', 'redirect' => route('user.items.index')], 200);
    }
}
