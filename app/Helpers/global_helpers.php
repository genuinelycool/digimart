<?php

use App\Models\Item;
use App\Models\KycVerification;
use Illuminate\Support\Facades\Auth;

/** get logged in user */
if(!function_exists('user')) {
    function user() {
        return Auth::guard('web')->user();
    }
}

/** get logged in admin */
if(!function_exists('admin')) {
    function admin() {
        return Auth::guard('admin')->user();
    }
}

/** get pending kyc count */
if(!function_exists('pendingKycCount')) {
    function pendingKycCount() : int
    {
        return KycVerification::whereStatus('pending')->count();
    }
}

/** check if it's author */
if(!function_exists('isAuthor')) {
    function isAuthor() : bool
    {
        return user()->user_type == 'author' && user()->kyc_status == 1 ? true : false;
    }
}

/** format date */
if(!function_exists('formatDate')) {
    function formatDate(String $date) : string
    {
        return date('M d, Y', strtotime($date));
    }
}

/** check permissions */
if(!function_exists('canAccess')) {
    function canAccess(array $permissions) : bool
    {
        $permission = auth()->guard('admin')->user()->hasAnyPermission($permissions);
        $superAdmin = auth()->guard('admin')->user()->hasRole('super admin');

        if($permission || $superAdmin) {
            return true;
        }
        return false;
    }
}

/** get human readable size */
if(!function_exists('formatSize')) {
    function formatSize($bytes, $decimalPlaces = 2) {
        if($bytes < 0) {
            return 0;
        }

        $sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        $factor = floor((strlen($bytes) - 1) / 3);
        $formattedSize = $bytes / pow(1024, $factor);

        return round($formattedSize, $decimalPlaces).$sizes[$factor];
    }
}

/** get icon for items */
if(!function_exists('getIcon')) {
    function getIcon($mimeType) : string
    {
        $fileIcon = 'bi-file-earmark';

        if(str_starts_with($mimeType, 'image/')) {
            $fileIcon = "bi-file-earmark-image";
        }elseif(str_starts_with($mimeType, 'video/')) {
            $fileIcon = "bi-file-earmark-play";
        }elseif(str_starts_with($mimeType, 'audio/')) {
            $fileIcon = "bi-file-earmark-music";
        }elseif(str_starts_with($mimeType, 'pdf/')) {
            $fileIcon = "bi-file-earmark-pdf";
        }elseif(str_starts_with($mimeType, 'text/')) {
            $fileIcon = "bi-file-earmark-text";
        }elseif(str_starts_with($mimeType, 'application/')) {
            $fileIcon = "bi-file-earmark-zip";
        }

        return $fileIcon;
    }
}

/** check author product status */
if(!function_exists('authorProductStatus')) {
    function authorProductStatus(string $productId) : string | bool
    {
        $item = Item::where('id', $productId)->where('author_id', user()->id)->first();

        if($item) {
            return $item->status;
        }

        return false;
    }
}
