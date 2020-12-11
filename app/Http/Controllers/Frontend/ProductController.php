<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $products = Product::orderBy('updated_at','desc')->paginate(12);

        //Xem chi tiết
        $details = Product::get();

        return view('frontend.product.index')->with([
            'categories' => $categories,
            'products' => $products,
            'details' => $details,
        ]);
    }

    public function detail(Product $product)
    {
        $categories = Category::get();
        $images = $product->images;
        $products = Category::find($product->category_id)->products()->inRandomOrder()->limit(4)->get();

        //Xem chi tiết
        $details = Product::get();

        return view('frontend.product.single-product')->with([
            'categories' => $categories,
            'product' => $product,
            'images' => $images,
            'products' => $products,
            'details' => $details,
        ]);
    }
}
