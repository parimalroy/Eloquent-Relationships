<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;

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

Route::get('/stu/create',[StudentController::class,'create']);
Route::get('/stu/all',[StudentController::class,'getStudents']);
Route::get('/stu/single',[StudentController::class,'singleStudent']);

Route::get('/contact/all',[ContactController::class,'getContact']);

