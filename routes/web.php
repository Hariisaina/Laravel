<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\ProposController;
use App\Http\Controllers\PaiementController;

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


Route::get('/prof', [ProfController::class, 'list']);
Route::get('/ajouter', [ProfController::class, 'ajouter']);
Route::post('/ajouter/traitement', [ProfController::class, 'ajouter_traitement']);
Route::get('/delete-prof/{id}', [ProfController::class, 'delete_prof']);
Route::get('/delete-point/{id}', [PointageController::class, 'delete_point']);
Route::get('/pointage', [PointageController::class, 'point']);
Route::get('/ajoute', [PointageController::class, 'ajoutpoint'])->name('pointage.ajoute');
Route::post('/ajouter/traite', [PointageController::class, 'ajoutertraite']);
Route::get('/pointprof', [PointageController::class, 'pointprof'])->name('pointage.pointprof');
Route::get('pointage/{id}', [PointageController::class,'show'])->name('pointage.show');
Route::get('/paiement', [PaiementController::class, 'paiement']);
Route::post('/paiement/traitement', [PaiementController::class, 'paiement_traitement']);
Route::get('/facture', [paiementController::class, 'facture']);
Route::get('/paiement',[PaiementController::class,'index'])->name('paiement.paiement');
Route::get('/facture',[PaiementController::class,'facture'])->name('paiement.facture');
Route::post('/ajouter/paiement',[PaiementController::class,'ajout'])->name('paiement.ajout');
Route::get('paiementprof',[PaiementController::class,'paiementprof'])->name('paiementprof');

Route::get('/paiement/{id}', [PaiementController::class, 'show'])->name('paiement.show');
