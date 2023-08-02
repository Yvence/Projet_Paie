<?php

use App\Http\Controllers\defautController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\DemandeController;
use App\Models\Departement;
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

Route::prefix('Departements')->group(function(){
    Route::get('/',[DepartementController::class,'index'])->name('Departement.index');
    Route::get('/create',[DepartementController::class,'create'])->name('Departement.create');
    Route::get('/edit',[DepartementController::class,'edit'])->name('Departement.edit');
    Route::post('/store',[DepartementController::class,'store'])->name('Departement.store');
   });

Route::prefix('Employés')->group(function(){
 Route::get('/',[EmployeController::class,'index'])->name('Employé.index');
 Route::get('/create',[EmployeController::class,'create'])->name('Employé.create');
 Route::get('/edit',[EmployeController::class,'edit'])->name('Employé.edit');
 Route::post('/store',[EmployeController::class,'store'])->name('Employé.store');
});
Route::prefix('Contrats')->group(function(){
    Route::get('/',[ContratController::class,'index'])->name('Contrat.index');
    Route::get('/create',[ContratController::class,'create'])->name('Contrat.create');
    Route::get('/edit',[ContratController::class,'edit'])->name('Contrat.edit');
    Route::post('/store',[ContratController::class,'store'])->name('Contrat.store');
   });
   Route::prefix('Demande')->group(function(){
    Route::get('/',[DemandeController::class,'index'])->name('Demande.index');
    Route::get('/create',[DemandeController::class,'create'])->name('Demande.create');
    Route::get('/edit',[DemandeController::class,'edit'])->name('Demande.edit');
    Route::post('/store',[DemandeController::class,'store'])->name('Demande.store');
   });


