<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::get();

        $products = $category->products()->paginate(12);

        //Xem chi tiết
        $details = Product::get();

        return view('frontend.categories.index')->with([
            'categories' => $categories,
            'products' => $products,
            'details' => $details,
            'category' => $category
        ]);
    }

    public function new()
    {
        $categories = Category::get();

        $products = Product::where('status',1)->orderBy('updated_at','desc')->paginate(12);

        //Xem chi tiết
        $details = Product::get();

        return view('frontend.categories.index')->with([
            'categories' => $categories,
            'products' => $products,
            'details' => $details,
        ]);
    }

    public function old()
    {
        $categories = Category::get();

        $products = Product::where('status',3)->orderBy('updated_at','desc')->paginate(12);

        //Xem chi tiết
        $details = Product::get();

        return view('frontend.categories.index')->with([
            'categories' => $categories,
            'products' => $products,
            'details' => $details,
        ]);
    }
}
