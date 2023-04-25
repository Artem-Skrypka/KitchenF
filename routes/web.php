<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IngredientForm;

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

// Route::get('/home', function () {
//     return view('home')->name('home');
// });

Route::get('/', [RecipeController::class, 'index'])->name('home');
Route::get('/recipes', [RecipeController::class, 'showAll'])->name('recipes');
Route::get('/recipe/{id}/edit', [RecipeController::class, 'showEditForm'])->name('showEditForm');
Route::put('/recipe/{id}', [RecipeController::class, 'updateRecipe'])->name('updateRecipe');
Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('single-recipe');
Route::post('/', [RecipeController::class, 'store'])->name('home');

// Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('show-recipe');
// Route::get('/{id}/edit', [RecipeController::class, 'edit'])->name('edit-recipe');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
