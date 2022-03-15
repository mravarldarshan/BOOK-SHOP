<?php

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\ragistrationcontroller;
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
Route::get('/login', function () {
    return view('login');
});
Route::get('ragister',[ragistrationcontroller::class,'adduser']);
Route::post('login',[ragistrationcontroller::class,'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get("/",[ProductController::class,'index']);
Route::get("details/{id}",[ProductController::class,'detail']);
Route::post("add_to_cart",[ProductController::class,'addtocart']);
route::get("/profile",[profilecontroller::class, 'profile']);
route::get("/cartlist",[productcontroller::class, 'cartlist']);

route::view("/about", 'about');
route::view("/contact", 'contact');
route::view("/shop", 'shop');
route::view("/cart", 'cart');
route::view("/checkout", 'checkout');
route::view("/404", '404');
route::view("/blog", 'blog');

