<?php

use App\Http\Controllers\AffectationController;
use App\Http\Controllers\AvantageController;
use App\Http\Controllers\defautController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\FicheController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\RetenuController;
use App\Http\Controllers\ServiceController;
use App\Models\Affectation;
use App\Models\Departement;
use App\Models\Service;
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
    Route::get('/edit/{id}',[DepartementController::class,'edit'])->name('Departement.edit');
    Route::post('/store',[DepartementController::class,'store'])->name('Departement.store');
    Route::get('/destroy/{id}',[DepartementController::class,'destroy'])->name('Departement.destroy');
    Route::post('/update/{id}',[DepartementController::class,'miseajour'])->name('Departement.miseajour');
   });

Route::prefix('Employes')->group(function(){
 Route::get('/',[EmployeController::class,'index'])->name('Employe.index');
 Route::get('/create',[EmployeController::class,'create'])->name('Employe.create');
 Route::get('/edit/{id}',[EmployeController::class,'edit'])->name('Employe.edit');
 Route::post('/update/{id}',[EmployeController::class,'update'])->name('Employe.update');
 Route::get('/destroy/{id}',[EmployeController::class,'destroy'])->name('Employe.destroy');
 Route::post('/store',[EmployeController::class,'store'])->name('Employe.store');
});
Route::prefix('Contrats')->group(function(){
    Route::get('/',[ContratController::class,'index'])->name('Contrat.index');
    Route::get('/create',[ContratController::class,'create'])->name('Contrat.create');
    Route::get('/edit/{id}',[ContratController::class,'edit'])->name('Contrat.edit');
    Route::post('/store',[ContratController::class,'store'])->name('Contrat.store');
    Route::post('/update/{id}',[ContratController::class,'update'])->name('Contrat.update');
    Route::get('/destroy/{id}',[ContratController::class,'destroy'])->name('Contrat.destroy');
   });
   Route::prefix('Demande')->group(function(){
    Route::get('/',[DemandeController::class,'index'])->name('Demande.index');
    Route::get('/create',[DemandeController::class,'create'])->name('Demande.create');
    Route::get('/edit',[DemandeController::class,'edit'])->name('Demande.edit');
    Route::post('/store',[DemandeController::class,'store'])->name('Demande.store');
   });
   Route::prefix('Affectation')->group(function(){
    Route::get('/',[AffectationController::class,'index'])->name('Affectation.index');
    Route::get('/create',[AffectationController::class,'create'])->name('Affectation.create');
    Route::get('/edit/{id}',[AffectationController::class,'edit'])->name('Affectation.edit');
    Route::post('/store',[AffectationController::class,'store'])->name('Affectation.store');
    Route::get('/destroy/{id}',[AffectationController::class,'destroy'])->name('Affectation.destroy');
    Route::post('/update',[AffectationController::class,'update'])->name('Affectation.update');
   });
   Route::prefix('Service')->group(function(){
    Route::get('/',[ServiceController::class,'index'])->name('Service.index');
    Route::get('/create',[ServiceController::class,'create'])->name('Service.create');
    Route::get('/edit/{id}',[ServiceController::class,'edit'])->name('Service.edit');
    Route::post('/store',[ServiceController::class,'store'])->name('Service.store');
    Route::get('/destroy/{id}',[ServiceController::class,'destroy'])->name('Service.destroy');
    Route::post('/update/{id}',[ServiceController::class,'miseajour'])->name('Service.miseajour');
   });
   Route::prefix('Poste')->group(function(){
    Route::get('/',[PosteController::class,'index'])->name('Poste.index');
    Route::get('/create',[PosteController::class,'create'])->name('Poste.create');
    Route::get('/edit/{id}',[PosteController::class,'edit'])->name('Poste.edit');
    Route::get('/destroy/{id}',[PosteController::class,'destroy'])->name('Poste.destroy');
    Route::post('/update/{id}',[PosteController::class,'update'])->name('Poste.update');
    Route::post('/store',[PosteController::class,'store'])->name('Poste.store');
   });
   Route::prefix('Avantage')->group(function(){
    Route::get('/',[AvantageController::class,'index'])->name('Avantage.index');
    Route::get('/destroy/{id}',[AvantageController::class,'destroy'])->name('Avantage.destroy');
    Route::get('/create',[AvantageController::class,'create'])->name('Avantage.create');
    Route::get('/edit/{id}',[AvantageController::class,'edit'])->name('Avantage.edit');
    Route::post('/store',[AvantageController::class,'store'])->name('Avantage.store');
    Route::post('/update',[AvantageController::class,'miseajour'])->name('Avantage.miseajour');
   });
   Route::prefix('Retenues')->group(function(){
    Route::get('/',[RetenuController::class,'index'])->name('Retenu.index');
    Route::get('/create',[RetenuController::class,'create'])->name('Retenu.create');
    Route::get('/edit/{id}',[RetenuController::class,'edit'])->name('Retenu.edit');
    Route::post('/store',[RetenuController::class,'store'])->name('Retenu.store');
    Route::post('/update/{id}',[RetenuController::class,'update'])->name('Retenu.update');
    Route::get('/destroy/{id}',[RetenuController::class,'destroy'])->name('Retenu.destroy');
   });
   Route::prefix('Fiches')->group(function(){
    Route::get('/',[FicheController::class,'index'])->name('Fiche.index');
    Route::get('/create',[FicheController::class,'create'])->name('Fiche.create');
    Route::get('/edit',[FicheController::class,'edit'])->name('Fiche.edit');
    Route::post('/store',[FicheController::class,'store'])->name('Fiche.store');
   });
   
   

