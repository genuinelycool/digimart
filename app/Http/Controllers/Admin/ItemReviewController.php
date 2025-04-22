<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ItemReviewController extends Controller
{
    function PendingIndex() : View
    {
        $items = Item::where('status', 'pending')->paginate(25);
        return view('admin.item-review.pending-index', compact('items'));
    }

    function show(string $id) : View
    {
        $item = Item::findOrFail($id);
        return view('admin.item-review.show', compact('item'));
    }
}
