<?php

use App\Http\Controllers\MemeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// definisco le rotte

// rotta get per leggere i dati
Route::get('/memes', [MemeController::class, 'index']);

// rotta post per creare un nuovo elemento meme
Route::post('/memes', [MemeController::class, 'store']);

// rotta put per aggiornare i dati
Route::put('/memes/{id}', [MemeController::class, 'update']);