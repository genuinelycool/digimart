<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
        $categorySupportedExtensions = Category::find(session()->get('selected_category'))->file_types;

        $request->validate([
            'file.*' => ['required', 'mimes:'.implode(',', $categorySupportedExtensions)],
        ]);
    }
}
