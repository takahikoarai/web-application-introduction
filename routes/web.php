<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'index']);
Route::get('/create', [IndexController::class, 'create']);
Route::post('/create', [IndexController::class, 'create']);
Route::get('/update', [IndexController::class, 'update']);
Route::post('/update', [IndexController::class, 'update']);
Route::get('/delete', [IndexController::class, 'delete']);
Route::post('/delete', [IndexController::class, 'delete']);