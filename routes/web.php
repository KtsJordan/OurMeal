<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',function(){
    return view('admin.dashboard');
});
Route::get('/Category',[CategoryController::class,'GetIndex'])->name('category.index');
Route::post('/Category/store',[CategoryController::class,'storeCategory'])->name('Category.store');
Route::put('/Category/update',[CategoryController::class,'updateCategory'])->name('Category.update');
Route::delete('/Category/delete',[CategoryController::class,'destroy'])->name('Category.destroy');
