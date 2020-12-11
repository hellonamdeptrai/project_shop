<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {
        $categories = Category::get();

        $items = Cart::content();
        // dd($items);

        return view('frontend.cart.index')->with([
            'items' => $items,
            'categories' => $categories,
        ]);
    }

    public function add($id)
    {
        $product = Product::find($id);
        Cart::add($product->id,$product->name,1,$product->sale_price,0,
            [
                'image' => $product->avatar
            ]
        );
        return redirect()->route('frontend.cart.index');
    }

    public function remove($id)
    {
        Cart::remove($id);
        return redirect()->route('frontend.cart.index');
    }

}
