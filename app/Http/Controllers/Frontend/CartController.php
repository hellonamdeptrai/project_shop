<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

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

    public function create()
    {
        $categories = Category::get();
        return view('frontend.cart.create')->with([
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $order = new Order();

        $order->user_id = Auth::user()->id;
        $order->status = 1;
        $order->money = Cart::total(0,0,'');

        $order->save();

        Cart::destroy();

        return redirect()->route('frontend.index');
    }

}
