<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [CharacterController::class, 'index']);
Route::get('/character', [CharacterController::class, 'index'])->name('character.index');
Route::get('/character/create', [CharacterController::class, 'create'])->name('character.create');
Route::post('/character', [CharacterController::class, 'store'])->name('character.store');
Route::get('/character/{character}/edit', [CharacterController::class, 'edit'])->name('character.edit');
Route::get('/character/{character}/view', [CharacterController::class, 'view'])->name('character.view');
Route::put('/character/{character}/update', [CharacterController::class, 'update'])->name('character.update');
Route::delete('/character/{character}/destroy', [CharacterController::class, 'destroy'])->name('character.destroy');