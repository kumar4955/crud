<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

//Route::get('/', function () {
    //return view('Home');
//});
Route::get('/', [HomeController::class, 'view']);
Route::get('/Admin/login', [AdminController::class, 'login']);
Route::post('/Admin/login', [AdminController::class, 'submitlogin']);
Route::get('/Admin/Dashboard', [AdminController::class, 'dashboard']);
Route::resource('/Admin/category', CategoryController::class);
Route::get('/Admin/category', [ CategoryController::class, 'create']);
Route::get('/Admin/category', [ CategoryController::class, 'index']);
