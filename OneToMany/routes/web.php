<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/create/stu',[StudentController::class,'create']);
Route::get('/update/stu',[StudentController::class,'update']);
Route::get('/all/stu',[StudentController::class,'allStudent']);
Route::get('/all/book',[BookController::class,'getBook']);
