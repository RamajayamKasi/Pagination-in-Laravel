<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginationController;

Route::get('/{name}', [PaginationController::class, 'show'])->name('paginationView');
