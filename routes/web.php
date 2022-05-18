<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\MyController;
use App\Http\Controllers\MyController;
use App\Helper\CartHelper;
use App\Http\Controllers\CartController;

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
Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/product/{id?}', [MyController::class,'getProductByTypeID'])->name('product');

Route::get('/detail/{id?}', [MyController::class,'getDetailProduct'])->name('detail');

Route::get('/',[MyController::class,'getProducts'])->name('index');

//Route::get('/store',[MyController::class,'getProducts'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::group(['prefix' => 'cart'],function(){
    Route::get('checkout',[CartController::class,'view'])->name('cart.view');
    Route::get('add/{id}',[CartController::class,'add'])->name('cart.add');
    Route::get('remove/{id}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('update/{id}',[CartController::class,'update'])->name('cart.update');
});
