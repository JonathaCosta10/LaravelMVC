<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


    Route::get('/', function () {

        return view('welcome');

    });

Route::get('/P1', [UserController::class, 'P1']);

Route::get('/P2', [UserController::class, 'P2']);

Route::get('/P3', [UserController::class, 'P3']);

// Rota google não passa pelo controlador

