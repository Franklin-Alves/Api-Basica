<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('products', [ProductController::class, 'index']);

Route::post('products/create', [ProductController::class, 'store']);

Route::get('products/{id}/show', [ProductController::class, 'show']);


Route::put('products/{id}/update', [ProductController::class, 'update']);

Route::delete('products/{id}/destroy', [ProductController::class, 'destroy']);

