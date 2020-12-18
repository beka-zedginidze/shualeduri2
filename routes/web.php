<?php

use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function(){
  return view('index');

});

Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');




Route::get('/product/all', 'ProductsController@getAllProducts')
  ->name('products.all')
  ->middleware('auth'); 
;

Route::post('/product/save', 'ProductsController@saveProducts')->middleware('auth');
Route::get('/product/edit', 'ProductsController@editProducts');
Route::get('/product/update', 'ProductsController@updateProducts')->middleware('auth');
Route::get('/product/delete', 'ProductsController@deleteProducts')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/custom/register', [App\Http\Controllers\AuthorizationController::class, 'register'])->name('auth.custom.register');
Route::post('/custom/login', [App\Http\Controllers\AuthorizationController::class, 'login'])->name('auth.custom.login');
Route::post('/custom/logout', [App\Http\Controllers\AuthorizationController::class, 'logout'])->name('auth.custom.logout');

Route::get('testLayout', function () {
  return View::make('layouts.main');

});