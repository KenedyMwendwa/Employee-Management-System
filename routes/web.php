<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeeController;
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
    //creating new department
    Route::get('/departments/create', [DepartmentsController::class, 'create'])->name('create-department');
    Route::post('/departments/create', [DepartmentsController::class, 'store']);
    //showing a single department
    Route::get('/departments/single', [DepartmentsController::class, 'show']);
    //editing an existing department
    Route::get('/departments/edit', [DepartmentsController::class, 'edit'])->name('edit-department');
    Route::put('/departments/edit', [DepartmentsController::class, 'update']);
    //delete a blogpost
    Route::delete('/departments', [DepartmentsController::class, 'destroy'])->name('delete-department');
//employees
Route::get('/employees/all', [EmployeeController::class, 'index'])->name('all-employees');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('create-employee');
Route::post('/employees/create', [EmployeeController::class, 'store']);
});