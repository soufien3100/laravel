<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;

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


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', [NavController::class, 'home']);
Route::get('books', [NavController::class, 'books']);
Route::get('addBook', [NavController::class, 'addBook']);
Route::post('addBook', [ActionController::class, 'addBook']);



