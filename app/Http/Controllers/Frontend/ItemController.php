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
}
