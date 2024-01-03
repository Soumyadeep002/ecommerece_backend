<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\customerController;
use App\Http\Controllers\testController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/forgotPassword', [LoginController::class, 'forgotPassword']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'adminRegister']);


Route::get('/products', [productController::class, 'index']);
Route::get('/products/add', [productController::class, 'addForm']);
Route::post('/products/add', [productController::class, 'add']);
Route::get('/products/update/{id}', [productController::class, 'editView']);
Route::post('/products/update/{id}', [productController::class, 'edit']);
Route::get('/products/delete/{id}', [productController::class, 'delete']);



Route::get('/customer', [customerController::class, 'index']);
Route::get('/customer/{cid}', [customerController::class, 'customerProfile']);








