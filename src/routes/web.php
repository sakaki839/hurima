<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'top']);

Route::get('/register', [ContactController::class, 'register']);

Route::get('/login', [ContactController::class, 'login']);

// Route::get('/mypage', [ContactController::class, 'mypage']);

Route::get('/mypage/profile', [ContactController::class, 'profile']);

Route::get('/item', [ContactController::class, 'item']);