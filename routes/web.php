<?php

use App\Http\Controllers\IntellectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/Apropos',[IntellectController::class ,'apropos'])->name('Apropos');

Route::prefix('Home')->group(function() {

    Route::get('/',[IntellectController::class ,'index'])->name('Home.welcome');
    Route::get('/Apropos',[IntellectController::class ,'apropos'])->name('Home.Apropos');
    // Route::get('/Apropos',[IntellectController::class ,'apropos'])->name('Home.Apropos');
    // les routes pour l'inscription
    Route::get('/Enregistrement',[IntellectController::class ,'register'])->name('Home.sign_in');
    Route::post('/Inscription',[IntellectController::class ,'register_traitement'])->name('Home.Valid');
    // Les routes pour la connexion
    Route::get('/Connexion',[IntellectController::class ,'login'])->name('Home.sign_up');
    Route::post('/Connexion',[IntellectController::class ,'login_traitement'])->name('Home.ValidConnexion');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
