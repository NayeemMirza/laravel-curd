<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('dashboard'); 
});

Route::get("users", [UserController::class,"index"])->name('users.index');
Route::get("users/create", [UserController::class,"create"])->name('users.create');
Route::post("users/store", [UserController::class,"store"])->name('users.store');
Route::get("users/{id}/edit", [UserController::class,"edit"])->name('users.edit');
Route::put("users/{id}/update", [UserController::class,"update"])->name('users.update');
Route::delete("users/{id}/delete", [UserController::class,"delete"])->name('users.delete');