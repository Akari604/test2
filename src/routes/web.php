<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test2Controller;

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

Route::get('/products',[Test2Controller::class, 'index']);
Route::post('/products',[Test2Controller::class, 'index']);
Route::post('/products/{:productId}',[Test2Controller::class, 'detail']);
Route::patch('/products/{:productId}/update',[Test2Controller::class, 'update']);
Route::get('/products/register',[Test2Controller::class, 'create']);
Route::post('/products/register',[Test2Controller::class, 'store']);
Route::get('/products/search',[Test2Controller::class, 'search']);
Route::delete('/products/{:productId}/delete',[Test2Controller::class, 'destroy']);
