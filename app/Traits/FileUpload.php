<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

trait FileUpload {
    function uploadFile(UploadedFile $file, string $dir = "uploads", string $disk = "public") : ?string
    {
        // Validate disk type
        if (!in_array($disk, ['public', 'local'])) {
            throw new Exception("Invalid disk type. Must be either 'public' or 'local'");
        }

        // Handle file upload
        try {
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
            $file->storeAs($dir, $fileName, $disk);
            return "/$dir/$fileName";
        } catch (\Throwable $th) {
            throw $th;
        }

        return null;
    }

    function deleteFile(string $path, string $disk = "public") : bool
    {
        // Validate disk type
        if (!in_array($disk, ['public', 'local'])) {
            throw new Exception("Invalid disk type. Must be either 'public' or 'local'");
        }

        if ($disk == 'public') {
            File::delete(public_path($path));
            return true;
        } else {
            if (File::exists(storage_path($path))) {
                File::delete(storage_path($path));
                return true;
            }
        }

        return false;
    }
}
