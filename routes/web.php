<?php

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SuccessController;
use App\Http\Middleware\IsAdmin;


Route::get('/', function () {
    return view('home.home',[
        'products' => Product::orderBy('created_at', 'desc')->limit(4)->get()
    ]);
});

Route::get('/product/{product:slug}', function(Product $product){
    return view('home.detail',['product'=>$product]);
});
// Route::get('/pay', function(Product $product,Transaction $transaction){
//     return view('home.pay',['product'=>$product,'transaction'=>$transaction]);
// });
Route::get('/pay',[TransactionController::class ,'show']);

Route::get('/{product:slug}/payment', function(Product $product){
    return view('home.payment',['product'=>$product]);
})->middleware('auth');
Route::post('/{product:slug}/payment',[TransactionController::class, 'transaction']);
// Route::get('/pay',[SuccessController::class, 'index'])->middleware('auth');

Route::get('/regist', [RegisterController::class, 'index']);
Route::post('/regist', [RegisterController::class, 'store']);

Route::post('/contact', [ContactContoller::class ,'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/all-product', function () {
    return view('home.all',['products'=> Product::orderBy('short_name', 'asc')->get()]);
});

Route::get('/dashboard',[AdminController::class ,'index'])->middleware('isAdmin');
Route::get('/dashboard/product',[AdminController::class ,'product'])->middleware('isAdmin');
Route::post('/dashboard/product-add',[ProductController::class ,'add'])->middleware('isAdmin');
Route::delete('/contact/cndestroy/{contact:id}', [ContactContoller::class ,'destroy']);
Route::delete('/user/usdestroy/{user:id}', [RegisterController::class ,'destroy']);
Route::delete('/product/usdestroy/{product:id}', [ProductController::class ,'destroy']);
Route::get('/dashboard/product/{product:slug}', [ProductController::class ,'edit']);
Route::put('/dashboard/product/edit/{product:slug}', [ProductController::class ,'update']);
Route::delete('/order/ordestroy/{transaction:id}', [TransactionController::class ,'destroy']);
