<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\ItemHistory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        $item = Item::with('histories')->findOrFail($id);
        return view('admin.item-review.show', compact('item'));
    }

    function updateStatus(Request $request, string $id) : RedirectResponse
    {
        $request->validate([
            'status' => ['required', 'in:pending,approved,soft_rejected,hard_rejected'],
        ]);

        $item = Item::findOrFail($id);
        $item->status = $request->status;
        $item->save();

        $history = new ItemHistory();
        $history->item_id = $item->id;
        $history->status = $request->status;
        $history->author_id = $item->author_id;
        $history->reviewer_id = admin()->id;
        $history->body = __('Congratulations! Your item has been approved.');

        $history->save();
    }
}
