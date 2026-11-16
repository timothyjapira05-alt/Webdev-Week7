<?php

use App\Http\Controllers\HandphoneController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HandphoneController::class, 'index']);
Route::get('/create-handphone', [HandphoneController::class, 'create']);
Route::post('/savehandphone', [HandphoneController::class, 'store'])->name('savehandphone');

Route::post('/delete-handphone', [HandphoneController::class, 'destroy'])->name('delete-handphone');
Route::get('/edit-handphone/{handphone}', [HandphoneController::class, 'edit'])->name('edit-handphone');
Route::post('/update-handphone/{handphone}', [HandphoneController::class, 'update'])->name('update-handphone');