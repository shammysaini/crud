<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MyController;

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
    return view('welcome'); 
});
Route::get('sign',[MyController::class,'SignUpPage']);
Route::get('getData',[MyController::class,'getData']);
Route::post('signcomplete',[MyController::class,'SignUpComplete'])->name('post.signcomplete');
Route::get('/edit/{id}',[MyController::class,'EditPage']);

Route::post('data',[MyController::class,'MySave'])->name('post.update');
Route::get('/delete/{id}',[MyController::class,'delete']);

