<?php

use App\Http\Controllers\ThreadsController;
use App\Http\Controllers\TopController;
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

Route::get('/', [TopController::class, 'index']);
Route::get('/threads/create', [ThreadsController::class, 'create']);
Route::post('/threads/create', [ThreadsController::class, 'post']);
Route::get('/threads/index', [ThreadsController::class, 'index']);
