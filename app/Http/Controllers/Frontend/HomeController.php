<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $images = Image::take(2)->get();
        $categories = Category::get();

        //Xem chi tiết
        $details = Product::get();

        //Điện thoại mới
        $products = Product::where('status',2)->take(4)->orderBy('updated_at','desc')->get();
        $products2 = Product::where('status',2)->skip(4)->take(4)->orderBy('updated_at','desc')->get();

        //Hai điện thoại ngẫu nhiên
        $productsrandom = Product::inRandomOrder()->limit(2)->get();

        //Sắp bán
        $comingsoon = Product::where('status',1)->take(4)->orderBy('updated_at','desc')->get();
        $comingsoon2 = Product::where('status',1)->skip(4)->take(4)->orderBy('updated_at','desc')->get();
        $comingsoon3 = Product::where('status',1)->skip(8)->take(4)->orderBy('updated_at','desc')->get();

        //Điện thoại cũ
        $old = Product::where('status',3)->take(4)->orderBy('updated_at','desc')->get();
        $old2 = Product::where('status',3)->skip(4)->take(4)->orderBy('updated_at','desc')->get();
        $old3 = Product::where('status',3)->skip(8)->take(4)->orderBy('updated_at','desc')->get();
        // dd($productsrandom);


        return view('frontend.home')->with([
            // 'images' => $images,
            'categories' => $categories,
            'details' => $details,
            'products' => $products,
            'products2' => $products2,
            'productsrandom' => $productsrandom,
            'comingsoon' => $comingsoon,
            'comingsoon2' => $comingsoon2,
            'comingsoon3' => $comingsoon3,
            'old' => $old,
            'old2' => $old2,
            'old3' => $old3,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
