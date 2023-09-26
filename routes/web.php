<?php

use App\Http\Controllers\MovementController;
use App\Http\Controllers\ProduitController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Produits',[ProduitController::class,'index'])->name('Produit.index');
Route::get('/Produits/ajouter',[ProduitController::class,'ajouter'])->name('Produit.ajouter');
Route::post('/Produits/store',[ProduitController::class,'store'])->name('Produit.store');
Route::get('/Produits/edit/{id}',[ProduitController::class,'edit'])->name('Produit.edit');
Route::patch('Produit/update/{id}',[ProduitController::class,'update'])->name('Produit.update');
Route::delete('Produit/delete/{id}',[ProduitController::class,'delete'])->name('Produit.delete');
/////
Route::get('/Movements/create',[MovementController::class,'create'])->name('Movement.create');
Route::post('/Movements/store',[MovementController::class,'store'])->name('Movement.store');

