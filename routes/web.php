<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationTestController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pegi', [PaginationTestController::class, 'index'])->name('pegi');
