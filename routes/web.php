<?php

use App\Http\Controllers\defautController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/welcome', [App\http\Controllers\defautController::class,'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('Employés')->group(function(){
 Route::get('/',[EmployeController::class,'index'])->name('Employé.index');
 Route::get('/create',[EmployeController::class,'create'])->name('Employé.create');
 Route::get('/edit/{Employé}',[EmployeController::class,'edit'])->name('Employé.edit');
});

