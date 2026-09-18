<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemanController;

Route::get('/', [TemanController::class, 'index']);
Route::get('/tambah_teman', [TemanController::class, 'tambah']);
Route::post('/simpan_teman', [TemanController::class, 'simpan']);


