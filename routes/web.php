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




Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/Admin', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/departments/all', [DepartmentsController::class, 'index'])->name('all-departments');
    Route::get('/departments/create', [DepartmentsController::class, 'create'])->name('create-department');
    Route::post('/departments/create', [DepartmentsController::class, 'store']);
});