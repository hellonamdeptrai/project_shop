<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard
Route::prefix('dashboard')->middleware(['auth','auth.admin'])->group(function () {
    // Trang chủ dashboard
    Route::get('/',[\App\Http\Controllers\Backend\DashboardController::class,'index'])->name('backend.dashboard');
    // Quản lý sản phẩm
    Route::prefix('products')->group(function(){
        Route::get('/', [\App\Http\Controllers\Backend\ProductController::class,'index'])->name('backend.product.index');
        //Thêm mới
        Route::get('/create', [\App\Http\Controllers\Backend\ProductController::class,'create'])->name('backend.product.create');
        Route::post('/', [\App\Http\Controllers\Backend\ProductController::class,'store'])->name('backend.product.store');
        //Chỉnh sửa
        Route::get('/{product}/edit', [\App\Http\Controllers\Backend\ProductController::class,'edit'])
        ->name('backend.product.edit')
        ->middleware('can:update,product');
        Route::put('/{id}', [\App\Http\Controllers\Backend\ProductController::class,'update'])->name('backend.product.update');
        //Xóa
        Route::get('/{id}', [\App\Http\Controllers\backend\ProductController::class,'destroy'])->name('backend.product.delete');

    });
    // Quản lý người dùng
    Route::prefix('users')->group(function(){
        Route::get('/', [\App\Http\Controllers\Backend\UserController::class,'index'])->name('backend.user.index');
        //Thêm mới
        Route::get('/create', [\App\Http\Controllers\Backend\UserController::class,'create'])->name('backend.user.create');
        Route::post('/', [\App\Http\Controllers\Backend\UserController::class,'store'])->name('backend.user.store');
        //Chỉnh sửa
        Route::get('/{id}/edit', [\App\Http\Controllers\Backend\UserController::class,'edit'])->name('backend.user.edit');
        Route::put('/{id}', [\App\Http\Controllers\Backend\UserController::class,'update'])->name('backend.user.update');
        //Xóa
        Route::get('/{id}', [\App\Http\Controllers\Backend\UserController::class,'destroy'])->name('backend.user.delete');
    });
    // Quản lý danh mục
    Route::prefix('categories')->group(function(){
        Route::get('/', [\App\Http\Controllers\Backend\CategoryController::class,'index'])->name('backend.categories.index');
        //Thêm mới
        Route::get('/create', [\App\Http\Controllers\Backend\CategoryController::class,'create'])->name('backend.categories.create');
        Route::post('/', [\App\Http\Controllers\Backend\CategoryController::class,'store'])->name('backend.categories.store');
        //Chỉnh sửa
        Route::get('/{id}/edit', [\App\Http\Controllers\Backend\CategoryController::class,'edit'])->name('backend.categories.edit');
        Route::put('/{id}', [\App\Http\Controllers\Backend\CategoryController::class,'update'])->name('backend.categories.update');
        //Xóa
        Route::get('/{id}', [\App\Http\Controllers\Backend\CategoryController::class,'destroy'])->name('backend.categories.delete');

    });
    // Quản lý đặt hàng
    Route::prefix('orders')->group(function(){
        Route::get('/', [\App\Http\Controllers\Backend\OrderController::class,'index'])->name('backend.order.index');
    });
});

// Trang bán hàng
Route::prefix('/')->group(function () {
    Route::get('/',[\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.index');
    //Giỏ hàng
    Route::prefix('cart')->group(function () {
        Route::get('/',[\App\Http\Controllers\Frontend\CartController::class, 'index'])->name('frontend.cart.index');
        Route::get('/add/{id}',[\App\Http\Controllers\Frontend\CartController::class, 'add'])->name('frontend.cart.add');
        Route::get('/remove/{id}',[\App\Http\Controllers\Frontend\CartController::class, 'remove'])->name('frontend.cart.remove');

    });
    //Sản phẩm
    Route::prefix('product')->group(function () {
        Route::get('/',[\App\Http\Controllers\Frontend\ProductController::class, 'index'])->name('frontend.product.index');
        Route::get('/{product}',[\App\Http\Controllers\Frontend\ProductController::class, 'detail'])->name('frontend.product.detail');
    });
    //Danh mục sản phẩm
    Route::prefix('category/')->group(function () {
        Route::get('/{category}',[\App\Http\Controllers\Frontend\CategoryController::class, 'index'])->name('frontend.category.index');
        //Sản phẩm sắp ra và cũ
        Route::prefix('phone')->group(function () {
            Route::get('/new',[\App\Http\Controllers\Frontend\CategoryController::class, 'new'])->name('frontend.new.index');
            Route::get('/old',[\App\Http\Controllers\Frontend\CategoryController::class, 'old'])->name('frontend.old.index');
        });
    });
    //Người dùng
    Route::prefix('user')->group(function () {
        Route::get('/{product}/edit',[\App\Http\Controllers\Frontend\UserController::class, 'edit'])->name('frontend.user.edit');
        Route::put('/{id}', [\App\Http\Controllers\Backend\UserController::class,'update'])->name('frontend.user.update');
    });
    //Order
    Route::prefix('order')->group(function () {
        Route::get('/checkout', [\App\Http\Controllers\Frontend\CartController::class,'create'])->name('frontend.order.create');
        Route::post('/', [\App\Http\Controllers\Frontend\CartController::class,'store'])->name('frontend.order.store');
    });
});
