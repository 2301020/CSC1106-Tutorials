<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', [EmailController::class, 'index'])->name('email.index');
Route::get('/email/create', [EmailController::class, 'create'])->name('email.create');
Route::post('/email', [EmailController::class, 'store'])->name('email.store');
Route::get('/email/{email}/edit', [EmailController::class, 'edit'])->name('email.edit');
Route::put('/email/{email}/update', [EmailController::class, 'update'])->name('email.update');
Route::delete('/email/{email}/destroy', [EmailController::class, 'destroy'])->name('email.destroy');