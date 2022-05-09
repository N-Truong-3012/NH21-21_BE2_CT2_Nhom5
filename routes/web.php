<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\MyController;
use App\Http\Controllers\MyController;

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

Route::get('/product/{id?}', [MyController::class,'getProductByID'])->name('product');

Route::get('/',[MyController::class,'getAllProducts'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
