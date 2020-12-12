<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at','desc')->paginate(10);

        return view('backend.products.index')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.products.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();

        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->brand = $request->get('brand');
        $product->origin_price = $origin = $request->get('origin_price');
        $product->sale_price = $sale = $request->get('sale_price');
        $product->promotion = $request->get('promotion');
        $product->specifications = $request->get('specifications');
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->discount_percent = (($origin - $sale)/$sale)*100  ;

        $file = $request->file('avatar');
        if($file){
            $path = Storage::disk('public')->putFileAs('images/avatars', $file,$file->getClientOriginalName());
            $product->avatar = $file->getClientOriginalName();
        }

        $product->save();


        $files = $request->file('images');
        foreach ($files as $file){
            $path = Storage::disk('public')->putFileAs('images', $file,$file->getClientOriginalName());

            $image = new Image();
            $image->name = $file->getClientOriginalName();
            $image->path = $path;
            $image->product_id = $product->id;
            $image->save();
        }
        return redirect()->route('backend.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        // $product = Product::find($id);
        return view('backend.products.edit')->with([
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->brand = $request->get('brand');
        $product->origin_price = $origin = $request->get('origin_price');
        $product->sale_price = $sale = $request->get('sale_price');
        $product->promotion = $request->get('promotion');
        $product->specifications = $request->get('specifications');
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->discount_percent = (($origin - $sale)/$sale)*100;

        $file = $request->file('avatar');
        if($file){
            $path = Storage::disk('public')->putFileAs('images/avatars', $file,$file->getClientOriginalName());
            $product->avatar = $file->getClientOriginalName();
        }
        $product->avatar = $product->avatar;

        $product->save();

        $files = $request->file('images');
        if ($files) {
            foreach ($files as $file){
                $path = Storage::disk('public')->putFileAs('images', $file,$file->getClientOriginalName());

                $image = new Image();
                $image->name = $file->getClientOriginalName();
                $image->path = $path;
                $image->product_id = $product->id;
                $image->save();
            }
        }


        return redirect()->route('backend.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $images = Image::get()->where('product_id',$id);

        foreach ($images as $image){
            Storage::disk('public')->delete('images/'.$image->name);
            $image->delete();
        }
        $product->delete();


        return redirect()->route('backend.product.index');
    }
}
