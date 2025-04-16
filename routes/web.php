<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerpustakaanController;

Route::get('/', [PerpustakaanController::class, 'index']);
