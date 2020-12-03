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
        // Route::delete('delete/{id}', [\App\Http\Controllers\backend\ProductController::class,'destroy'])->name('backend.product.delete');

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
    Route::get('cart/add/{id}',[\App\Http\Controllers\Frontend\CartController::class, 'add'])->name('frontend.cart.add');
    Route::get('cart',[\App\Http\Controllers\Frontend\CartController::class, 'index'])->name('frontend.cart.index');
    Route::get('cart/remove/{id}',[\App\Http\Controllers\Frontend\CartController::class, 'remove'])->name('frontend.cart.remove');

});
