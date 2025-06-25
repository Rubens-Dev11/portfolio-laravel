<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ✅ Page d’accueil (avec les projets)
Route::get('/', [HomeController::class, 'index'])->name('home');

// ✅ Affichage des projets en public (page projets)
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// ✅ Zone protégée pour gérer les projets (admin)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', AdminProjectController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


// ✅ Routes Breeze (authentification Laravel Breeze)
require __DIR__.'/auth.php';
