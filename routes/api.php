<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\customerController;
use App\Http\Controllers\testController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// customer controls 
Route::post('/customer/register', [customerController::class, 'customerRegister']);
Route::post('/customer/login', [customerController::class, 'customerLogin']);

// product control
Route::get('/products/get', [productController::class, 'getProducts']);
Route::get('/products/get/{catagory}', [productController::class, 'getProductsByCatagory']);

// Route::get('/test', [testController::class, 'index'])->middleware('rout-guard');
Route::get('/test', [testController::class, 'index']);



