<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('frontend.pages.cart');
    }

    function store(string $id): JsonResponse
    {
        if (Item::where('id', $id)->where('status', 'approved')->doesntExist()) {
            throw ValidationException::withMessages(['Item not found or not approved']);
        } elseif (CartItem::where('item_id', $id)->where('user_id', user()->id)->exists()) {
            return response()->json(['status' => 'error', 'message' => __('Item already in cart')], 400);
        }

        $cart = new CartItem();
        $cart->item_id = $id;
        $cart->user_id = user()->id;
        $cart->save();

        return response()->json(['status' => 'success', 'message' => __('Item added to cart')], 200);
    }
}
