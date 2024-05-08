<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/user',[UserController::class,'create']);
Route::get('/update/user',[UserController::class,'update']);
Route::get('/delete/user',[UserController::class,'delete']);
Route::get('/index/user',[UserController::class,'index']);
Route::get('/index/role',[RoleController::class,'index']);
