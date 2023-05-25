<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/master', function(){
//     return view('layout.master');
// });

// Route::get('/', [BookController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/{id}/category/{idCategory}', [CategoryController::class, 'show']);
Route::get('/{id}', [BookController::class, 'index']);

Route::get('/detail/{id}', [BookControler::class, 'show']);

Route::post('/buyBooks', [TransactionController::class, 'store']);
