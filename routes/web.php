<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentsController;
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
//     return view('index');
// });

Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/Admin/allDepartments', [AdminController::class, 'show']);
Route::get('/departments/all', [DepartmentsController::class, 'index']);
Route::get('/departments/create', [DepartmentsController::class, 'create']);