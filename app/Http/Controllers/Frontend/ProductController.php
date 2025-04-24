<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(): View
    {
        $query = Item::query();
        $query->where('status', 'approved');
        $products = $query->get();

        return view('frontend.pages.products', compact('products'));
    }

    function show(string $slug): View
    {
        $product = Item::where('slug', $slug)->whereStatus('approved')->firstOrFail();

        return view('frontend.pages.product-details', compact('product'));
    }
}
