<?php

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

Route::get('/', function () {
    return view('login');
});
// Route::get('login', function () {
//     if(Session()->has('name')){
//         return redirect('home');
//     }
//     return view('login');
// });
//login
Route::get('ragister',[ragistrationcontroller::class,'adduser']);
Route::get('login',[ragistrationcontroller::class,'login']);
Route::get('logout',[ragistrationcontroller::class,'logout']);
route::view("/home", 'home');
route::view("/about", 'about');
route::view("/contact", 'contact');
route::view("/shop", 'shop');
route::view("/cart", 'cart');
route::view("/checkout", 'checkout');
route::view("/404", '404');
route::view("/blog", 'blog');

