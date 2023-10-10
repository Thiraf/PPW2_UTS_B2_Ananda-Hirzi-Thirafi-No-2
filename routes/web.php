<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::post('/products', 'ProductController@store')->name('products.store');
Route::delete('/products/delete/{id}', 'ProductController@destroy')->name('products.destroy');

Route::get('/products/show/{id}', 'ProductController@show')->name('products.show');

Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
Route::put('/products/update/{id}', 'ProductController@update')->name('products.update');

Route::resource('products', ProductController::class);