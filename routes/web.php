<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\ProduitDepotController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



//PRODUIT
Route::get('/', [HomeController::class, 'home']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/ajouterproduit', [HomeController::class, 'create']);
Route::post('/ajouter_produit', [HomeController::class, 'store']);
Route::get('/get_produit/{id}', [HomeController::class, 'getProduit']);
Route::post('/modifier_produit/{id}', [HomeController::class, 'update']);
Route::post('/supprimer_produit/{id}', [HomeController::class, 'destroy']);



//DEPOTS
Route::get('/indexdepot', [DepotController::class, 'indexdepot']);
Route::get('/depots/create', [DepotController::class, 'craetedepot'])->name('depots.create');
Route::post('/depots', [DepotController::class, 'store'])->name('depots.store');
Route::delete('/depots/{id}', [DepotController::class, 'destroy'])->name('depots.destroy');
Route::get('/depot/{id}', [DepotController::class, 'show'])->name('depot.show');


//DEPOT&PRODUIT
Route::get('/produit-depot/create', [ProduitDepotController::class, 'create'])->name('produit-depot.create');
Route::post('/produit-depot', [ProduitDepotController::class, 'store'])->name('produit-depot.store');
Route::post('/depot/{depot_id}/produit/{produit_id}/update', [DepotController::class, 'updateQuantite']);
Route::delete('/depot/{depot_id}/produit/{produit_id}/delete', [DepotController::class, 'deleteProduitFromDepot']);
Route::get('/historique', [ProduitDepotController::class, 'historique'])->name('historique');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
